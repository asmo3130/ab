<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 13.08.18
 * Time: 15:57
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Content;
use frontend\models\Articles;
use frontend\models\News;

class ContentController extends Controller
{
    /**
     * @return string
     * @throws \yii\web\HttpException
     */
    public function actionIndex(){
        $url = Yii::$app->request->get('url');
        $content = Content::find()->where(['url' => $url])->all();
        $article = Articles::find()->where(['page' => $url])->all();

        if (empty($content)) throw new \yii\web\HttpException(404, 'Not found');

        return $this->render('index', compact('url', 'article','content'));
     }

     public function actionView(){
        $url = Yii::$app->request->get('page');
        $url_p = Yii::$app->request->get('url');

        $articles = Articles::find()->where(['url' => $url])->all();

         if (empty($articles)) throw new \yii\web\HttpException(404, 'Not found');

         return $this->render('view', compact('articles', 'url', 'url_p'));
     }

     public function actionNews(){
        $news = Yii::$app->request->get('news');

        $new = News::find()->where(['url' => $news])->all();

         if (empty($new)) throw new \yii\web\HttpException(404, 'Not found');

        return $this->render('news', compact('new'));
     }
}