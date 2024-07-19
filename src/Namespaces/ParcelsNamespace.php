<?php
declare(strict_types=1);

namespace Phodoval\DpdGeoApi\Namespaces;

use CuyZ\Valinor\Mapper\MappingError;
use DateTimeInterface;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;
use Phodoval\DpdGeoApi\Dto\PageSize;
use Phodoval\DpdGeoApi\Dto\Parcel;
use Phodoval\DpdGeoApi\Dto\PrintType;
use Phodoval\DpdGeoApi\Dto\TrackingResult;

class ParcelsNamespace extends AbstractNamespace {
    /**
     * @param DateTimeInterface $from
     * @param DateTimeInterface $to
     * @return Parcel[]
     * @throws GuzzleException
     * @throws MappingError|JsonException
     */
    public function list(DateTimeInterface $from, DateTimeInterface $to): array {
        /**
         * @var Parcel[]
         */
        return $this->request('GET', '', 'Parcel[]', query: [
            'from' => $from->format('Y-m-d'),
            'to' => $to->format('Y-m-d'),
        ]);
    }

    /**
     * @param string[]  $parcelNumbers
     * @param PrintType $printType
     * @param PageSize  $pageSize
     * @param int       $labelsPerPage
     * @param int       $labelsOffset
     * @return string
     * @throws GuzzleException
     * @throws JsonException
     */
    public function printLabelsBatch(
        array $parcelNumbers,
        PrintType $printType = PrintType::PDF,
        PageSize $pageSize = PageSize::A4,
        int $labelsPerPage = 4,
        int $labelsOffset = 1,
    ): string {
        $data = $this->preparePrintLabelsData($printType, $pageSize, $labelsPerPage, $labelsOffset);
        $data['parcels'] = array_map(fn(string $parcelNumber) => ['parcelNumber' => $parcelNumber], $parcelNumbers);

        /**
         * @var string
         */
        return $this->client->request('POST', $this->getNamespace().'/labels', $data);
    }

    public function printLabels(
        string $parcelNumber,
        PrintType $printType = PrintType::PDF,
        PageSize $pageSize = PageSize::A4,
        int $labelsPerPage = 4,
        int $labelsOffset = 1,
    ): string {
        /**
         * @var string
         */
        return $this->client->request('POST', $this->getNamespace().'/'.$parcelNumber.'/labels', $this->preparePrintLabelsData($printType, $pageSize, $labelsPerPage, $labelsOffset));
    }

    /**
     * @param string[] $parcelNumbers
     * @return TrackingResult[]
     * @throws GuzzleException
     * @throws JsonException
     * @throws MappingError
     */
    public function trackingBatch(array $parcelNumbers): array {
        /**
         * @var TrackingResult[]
         */
        return $this->request('POST', '/tracking', 'TrackingResult[]', data: ['parcels' => $parcelNumbers]);
    }

    /**
     * @throws GuzzleException
     * @throws MappingError
     * @throws JsonException
     */
    public function tracking(string $parcelNumber): ?TrackingResult {
        return $this->request('GET', '/tracking/'.$parcelNumber, TrackingResult::class);
    }

    public function getNamespace(): string {
        return 'parcels';
    }

    /**
     * @param PrintType $printType
     * @param PageSize  $pageSize
     * @param int       $labelsPerPage
     * @param int       $labelsOffset
     * @return array<string, mixed>
     */
    private function preparePrintLabelsData(PrintType $printType, PageSize $pageSize, int $labelsPerPage, int $labelsOffset): array {
        $data = ['printType' => $printType->value];

        if ($printType === PrintType::PDF) {
            $data['printProperties'] = [
                'pageSize' => $pageSize->value,
                'labelsPerPage' => $labelsPerPage,
            ];

            if ($pageSize === PageSize::A4) {
                $data['printProperties']['labelsOffset'] = $labelsOffset;
            }
        }

        return $data;
    }
}