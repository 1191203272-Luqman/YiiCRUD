<?php
namespace frontend\controllers;

use Yii;
use app\models\Employee;
use yii\web\Controller;

/**
 * manual CRUD
 */
class EmployeeController extends Controller{
    /**
     * Create 
     */
    public function actionCreate()
    {
        $model = new Employee();

        //new record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }

        return $this->render('create', ['model' => $model]);
    }

    /**
     * Read
     */
    public function actionIndex()
    {
        $employee = Employee::find()->all();

        return $this->render('index', ['model' => $employee]);
    }

    /**
     * Edit
     * @param integer $id
     */

    public function actionEdit($id)
    {
        $model = Employee::find()->where(['id' => $id])->one();

        //$id not found in database
        if($model === null)
            throw new NotfoundHttpException('The requested page does not exist.');

        //update record
        if($model === null){
            return $this->redirect(['index']);
        }
            return $this->render('edit', ['model' => $model]);
    }

    /**
     * Delete
     * @param integer $id
     */
    public function actionDelete($id)
    {
        $model = Employee::findOne($id);
        
       // $id not found in database
       if($model === null)
           throw new NotFoundHttpException('The requested page does not exist.');
            
       // delete record
       $model->delete();
        
       return $this->redirect(['index']);
    }
    

}