<?php

namespace App\Filament\Stock\Widgets;

use Filament\Forms\Components\Select;
use App\Filament\Stock\Resources\TransactionResource;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class Graph extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'graph';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Transaction In and Out Materials';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getFormSchema(): array
    {
        $currentYear = now()->year;
        $years = range($currentYear - 10, $currentYear); // Last 10 years
        $months = [
            '01' => 'January', '02' => 'February', '03' => 'March', '04' => 'April',
            '05' => 'May', '06' => 'June', '07' => 'July', '08' => 'August',
            '09' => 'September', '10' => 'October', '11' => 'November', '12' => 'December'
        ];

        return [
            Select::make('month')
                ->label('Month')
                ->options($months)
                ->default(now()->format('m')), // Default to current month

            Select::make('year')
                ->label('Year')
                ->options(array_combine($years, $years))
                ->default($currentYear) // Default to current year
        ];
    }

    protected function getOptions(): array
    {
        // Mengambil nilai filter dari form schema
        $filters = $this->form->getState();
        $month = $filters['month'] ?? now()->format('m');
        $year = $filters['year'] ?? now()->year;

        $startDate = "$year-$month-01";
        $endDate = date('Y-m-t', strtotime($startDate)); // Last day of the month

        $data = TransactionResource::getDataForChart($startDate, $endDate);

        return [
            'chart' => [
                'type' => 'bar',
                'height' => 365,
                'stacked' => true,
            ],
            'series' => [
                [
                    'name' => 'IN',
                    'data' => $data['in'],
                    'color' => '#10b981', // hijau
                ],
                [
                    'name' => 'OUT',
                    'data' => $data['out'],
                    'color' => '#ef4444', // merah
                ],
            ],
            'xaxis' => [
                'categories' => $data['dates'],
                'labels' => [
                    'style' => [
                        'fontFamily' => 'inherit',
                    ],
                ],
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'fontFamily' => 'inherit',
                    ],
                ],
                'title' => [
                    'text' => 'Jumlah'
                ],
            ],
        ];
    }
}


