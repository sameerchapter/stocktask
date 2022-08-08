<?php

namespace App\Console\Commands;
use App\Stock;
use Illuminate\Console\Command;

class StockCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stock:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $stocks = \FineScreenClass::stocks();
        foreach ($stocks['zoznamCennychPapierov'] as $res) {
            $data = [
                'ticker' => $res['ticker'],
                'nazov' => $res['nazov'],
                'url' => $res['url'],
                'price' => $res['price'],
                'change_percent' => $res['changePercent'],
                'rsi' => $res['rsi'],
                'macd' => $res['macd'],
                'pe_ratio' => $res['peRatio'],
                'volume' => $res['volume'],
                'high52Wk' => $res['high52Wk'],
                'performances_1' => $res['performances'][0]['hodnota'],
                'performances_3' => $res['performances'][1]['hodnota'],
                'performances_6' => $res['performances'][2]['hodnota'],
                'performances_12' => @$res['performances'][3]['hodnota'],
            ];
           $stock= Stock::FirstOrCreate(
                ['idcp' => $res['idcp']],
                $data
            );
            if(!$stock->wasRecentlyCreated && $stock->is_edit==0){
                Stock::where("id", $stock->id)->update($data);
               }
        }
    }
}
