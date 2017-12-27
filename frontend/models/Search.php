<?php
namespace frontend\models;

use yii\base\Model;
use Yii;

use backend\models\News;
use backend\models\Service;
use backend\models\Quotation;
use backend\models\Book;
use backend\models\InfoEmbassy;
use backend\models\InfoUzb;
use backend\models\Links;
use backend\models\Symbol;
use backend\models\Video;
use backend\models\Photo;
use backend\models\Page;

/**
 * Signup form
 */
class Search extends Model
{
    public $q;
    public $section;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['q', 'required'],
        ];
    }

    public function search()
    {
        $all = [];
        if ($this->q) {
            if ($this->section) {
                switch ($this->section) {
                    case 'news':
                        $all['news'] = News::searchAnywhere($this->q);
                        break;
                    case 'page':
                        $all['page'] = Page::searchAnywhere($this->q);
                        break;
                }
            } else {
                // all section
                $all['news'] = News::searchAnywhere($this->q);
                $all['page'] = Page::searchAnywhere($this->q);
                // $all['service'] = Service::searchAnywhere($this->q);
                // $all['faq'] = Faq::searchAnywhere($this->q);
            }
        }

      // echo "<pre>";
      // print_r($all);
      // echo "</pre>";
        
        return $all;
    }
}
