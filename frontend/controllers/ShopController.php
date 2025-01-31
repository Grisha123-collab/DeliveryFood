<?php

    namespace frontend\controllers;
        
    use Yii;
    use yii\web\Controller;
    use yii\web\UploadedFile;
    use yii\data\ActiveDataProvider;
    use yii\helpers\ArrayHelper;
    use yii\filters\AccessControl;

    use common\models\Category;
    // use common\models\Product;
    // use common\models\Order;
    // use common\models\Item_Order;
    // use common\models\Promotion;

    class ShopController extends Controller
    {
        public function actionView($id)
        {
           return $this->render('view',[
                'products' => []
            ]);
        }   

        public function actionBasket()
        {
           return $this->render('/shop/basket',[
                'val' => 'Hello'
            ]);
        }

        public function actionAbout()
        {
            return $this->render('about');
        }

    }
    