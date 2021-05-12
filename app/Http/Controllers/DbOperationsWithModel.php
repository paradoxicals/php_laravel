<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemoModel;

class DbOperationsWithModel extends Controller
{
    public function getRecords()
    {
      //$record = DemoModel::where("id",3)->first(); //get()

      $record = DemoModel::whereId(2)->first(); //get()

      $recordTwo = DemoModel::whereExplanation("Das ist ein Beispiel-2")->first();

      $recordThree = DemoModel::find(2);

      echo $record->explanation."<br>";
      echo $recordTwo->id."<br>";
      echo $recordThree->explanation."<br>";
    }

    public function add() //initialize the created_at and update_at colums automatically
    {
      DemoModel::create([
        "explanation"=>"Added with Model", // Dont forget the coma
      ]);
    }

    public function update()//update the update_at columns automatically
    {
      DemoModel::whereId("4")->update([
        "explanation"=>"Updated with Model", // Dont forget the coma
      ]);
    }

    public function delete()
    {
      DemoModel::whereId("4")->delete();
    }
}
