<?php


namespace app\controllers;

use app\Controller;

class Archive extends Controller
{

    public function index()
    {
        $title = 'Архив';
        $script = 'script/script_arch.js';
        if(isset($_POST['startFrom']))
        {
            $startFrom = $_POST['startFrom'];
            $this->view->records = \app\models\Record::findAll([':user_id'=> $_SESSION['user_id']]," WHERE user_id=:user_id ORDER BY id DESC LIMIT {$startFrom}, 10");
            echo json_encode($this->view->records);
        }
        elseif(isset($_POST['startFromDL']))
        {
            $startFrom = $_POST['startFromDL'];
            $this->view->records_dl = \app\models\DLRecord::findAll([':user_id'=> $_SESSION['user_id']]," WHERE user_id=:user_id ORDER BY id DESC LIMIT {$startFrom}, 10");
            echo json_encode($this->view->records_dl);
        }
        elseif(isset($_POST['startFromBl']))
        {
            $startFrom = $_POST['startFromBl'];
            $this->view->records_bl = \app\models\BlRecord::findAll([':user_id'=> $_SESSION['user_id']]," WHERE user_id=:user_id ORDER BY id DESC LIMIT {$startFrom}, 10");
            echo json_encode($this->view->records_bl);
        }
        elseif(isset($_POST['startFromRGU']))
        {
            $startFrom = $_POST['startFromRGU'];
            $this->view->records_rgu = \app\models\RGURecord::findAll([':user_id'=> $_SESSION['user_id']]," WHERE user_id=:user_id ORDER BY id DESC LIMIT {$startFrom}, 10");
            echo json_encode($this->view->records_rgu);
        }
        elseif(isset($_POST['id_rec']))
        {
            $id = $_POST['id_rec'];
            $this->view->ed_record = \app\models\Record::findById($id);
            echo json_encode($this->view->ed_record);
        }
        elseif(isset($_POST['id_dl']))
        {
            $id = $_POST['id_dl'];
            $this->view->er_dl = \app\models\DLRecord::findById($id);
            echo json_encode($this->view->er_dl);
        }
        elseif(isset($_POST['id_bl']))
        {
            $id = $_POST['id_bl'];
            $this->view->er_bl = \app\models\BlRecord::findById($id);
            echo json_encode($this->view->er_bl);
        }
        elseif(isset($_POST['id_rgu']))
        {
            $id = $_POST['id_rgu'];
            $this->view->er_rgu = \app\models\RGURecord::findById($id);
            echo json_encode($this->view->er_rgu);
        }
        elseif(isset($_POST['id_rec_save']))
        {
            $objDB = new \app\models\Record();
            $objDB->id = (int)$_POST['id_rec_save'];
            $objDB->mood = $this->clean($_POST['mood']);
            $objDB->daterec = $_POST['daterec'];
            $objDB->situation = $this->clean($_POST['situation']);
            $objDB->cognition = $this->clean($_POST['cognition']);
            $objDB->reaction = $this->clean($_POST['reaction']);
            $objDB->dispute = $this->clean($_POST['dispute']);
            $objDB->result = $this->clean($_POST['result']);
            $objDB->user_id = $_POST['user_id'];
            $objDB->user_name = $_POST['user_name'];
            $this->view->save_ed_record = $objDB->update();
        }
        elseif(isset($_POST['irs_dl']))
        {
            $objDB = new \app\models\DLRecord();
            $objDB->id = (int)$_POST['irs_dl'];
            $objDB->mood = $this->clean($_POST['mood']);
            $objDB->daterec = $_POST['daterec'];
            $objDB->situation = $this->clean($_POST['situation']);
            $objDB->cognition = $this->clean($_POST['cognition']);
            $objDB->dispute = $this->clean($_POST['dispute']);
            $objDB->user_id = $_POST['user_id'];
            $objDB->user_name = $_POST['user_name'];
            $this->view->ser_dl = $objDB->update();
        }
        elseif(isset($_POST['irs_bl']))
        {
            $objDB = new \app\models\BlRecord();
            $objDB->id = (int)$_POST['irs_bl'];
            $objDB->mood = $this->clean($_POST['mood']);
            $objDB->daterec = $_POST['daterec'];
            $objDB->cognition = $this->clean($_POST['cognition']);
            $objDB->dispute = $this->clean($_POST['dispute']);
            $objDB->user_id = $_POST['user_id'];
            $objDB->user_name = $_POST['user_name'];
            $this->view->ser_bl = $objDB->update();
        }
        elseif(isset($_POST['irs_rgu']))
        {
            $objDB = new \app\models\RGURecord();
            $objDB->id = (int)$_POST['irs_rgu'];
            $objDB->daterec = $_POST['daterec'];
            $objDB->cognition = $this->clean($_POST['cognition']);
            $objDB->dispute = $this->clean($_POST['dispute']);
            $objDB->user_id = $_POST['user_id'];
            $objDB->user_name = $_POST['user_name'];
            $this->view->ser_rgu = $objDB->update();
        }
        elseif(isset($_POST['del_rec']))
        {
            $objDB = new \app\models\Record();
            $objDB->id = (int)$_POST['del_rec'];
            $objDB->delete();
        }
        elseif(isset($_POST['del_rec_dl']))
        {
            $objDB = new \app\models\DLRecord();
            $objDB->id = (int)$_POST['del_rec_dl'];
            $objDB->delete();
        }
        elseif(isset($_POST['del_rec_bl']))
        {
            $objDB = new \app\models\BlRecord();
            $objDB->id = (int)$_POST['del_rec_bl'];
            $objDB->delete();
        }
        elseif(isset($_POST['del_rec_rgu']))
        {
            $objDB = new \app\models\RGURecord();
            $objDB->id = (int)$_POST['del_rec_rgu'];
            $objDB->delete();
        }
        else
        {
            $this->view->records = \app\models\Record::findAll([':user_id'=> $_SESSION['user_id']]," WHERE user_id=:user_id ORDER BY id DESC LIMIT 10");
            $this->view->records_dl = \app\models\DLRecord::findAll([':user_id'=> $_SESSION['user_id']]," WHERE user_id=:user_id ORDER BY id DESC LIMIT 10");
            $this->view->records_bl = \app\models\BlRecord::findAll([':user_id'=> $_SESSION['user_id']]," WHERE user_id=:user_id ORDER BY id DESC LIMIT 10");
            $this->view->records_rgu = \app\models\RGURecord::findAll([':user_id'=> $_SESSION['user_id']]," WHERE user_id=:user_id ORDER BY id DESC LIMIT 10");
            echo $this->view->render(__DIR__.'/../../templates/archive.php', compact('title', 'script'));
        }
    }
}