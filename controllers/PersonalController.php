<?php

namespace app\controllers;

use app\models\Personal;
use app\models\PersonalSearch;
use Symfony\Component\VarDumper\Cloner\Data;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

/**
 * PersonalController implements the CRUD actions for Personal model.
 */
class PersonalController extends Controller
{   
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Personal models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PersonalSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Personal model.
     * @param int $id_personal Id Personal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_personal)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_personal),
        ]);
    }

    /**
     * Creates a new Personal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Personal();
        $statusPerkawinan = Personal::STATUS_PERKAWINAN;
        $pendidikan = Personal::PENDIDIKAN;
        $agama = Personal::AGAMA;

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->tanggal_lahir = \Yii::$app->formatter->asDate($model->tanggal_lahir, 'yyyy-MM-dd'); //formatter bawaan Yii2 Framework
                $model->save();
                Yii::$app->session->setFlash('success', 'Data User Berhasil di Tambah');
                return $this->redirect(['view', 'id_personal' => $model->id_personal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'statusPerkawinan' => $statusPerkawinan,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
        ]);
    }

    /**
     * Updates an existing Personal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_personal Id Personal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_personal)
    {
        $model = $this->findModel($id_personal);
        $model->tanggal_lahir = date('d M Y', strtotime($model->tanggal_lahir));//formatter date php
        $statusPerkawinan = Personal::STATUS_PERKAWINAN;
        $pendidikan = Personal::PENDIDIKAN;
        $agama = Personal::AGAMA;

        if ($model->load($this->request->post())) {
            $model->tanggal_lahir = \Yii::$app->formatter->asDate($model->tanggal_lahir, 'yyyy-MM-dd'); //formatter date bawaan Yii2 Framework
            $model->save();
            Yii::$app->session->setFlash('success', 'Data User Berhasil di Edit');
            return $this->redirect(['view', 'id_personal' => $model->id_personal]);
        }

        return $this->render('update', [
            'model' => $model,
            'statusPerkawinan' => $statusPerkawinan,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
        ]);
    }

    /**
     * Deletes an existing Personal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_personal Id Personal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_personal)
    {
        $this->findModel($id_personal)->delete();

        Yii::$app->session->setFlash('danger', 'Data User Berhasil di Hapus');
        return $this->redirect(['index']);
    }

    /**
     * Finds the Personal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_personal Id Personal
     * @return Personal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_personal)
    {
        if (($model = Personal::findOne(['id_personal' => $id_personal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
