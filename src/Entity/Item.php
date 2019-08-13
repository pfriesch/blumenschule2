<?php


namespace App\Entity;


class Item
{
    public function __construct($value_array)
    {
        $this->article_id = $value_array['article_id'];
        $this->variant_id = $value_array['variant_id'];
        $this->code = $value_array['code'];
        $this->name = $value_array['name'];
        $this->name_botanic = $value_array['name_botanic'];
        $this->label_text = $value_array['label_text'];
        $this->description_short = $value_array['description_short'];
        $this->price = $value_array['price'];
        $this->picurl = $value_array['picurl'];
    }


    /**
     * @var int
     */
    public $article_id;

    /**
     * @var int
     */
    public $variant_id;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $name_botanic;

    /**
     * @var string
     */
    public $label_text;

    /**
     * @var string
     */
    public $description_short;

    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $picurl;

}