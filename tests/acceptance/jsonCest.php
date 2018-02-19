<?php


use borodulin\testjson\models\JsonTable;
use yii\db\JsonExpression;

class jsonCest
{
    public function updateAsJsonExpression(AcceptanceTester $I)
    {
        /** @var JsonTable $model */
        $model = JsonTable::findOne(1);
        $model->data = new JsonExpression(['foo' => 'not bar'], JsonExpression::TYPE_JSON);
        $model->save(false);
        $model = JsonTable::findOne(1);
        $I->assertEquals('not bar', $model->data['foo']);
    }

    public function updateAsArray(AcceptanceTester $I)
    {
        $model = JsonTable::findOne(1);
        $model->data = ['foo' => 'bar as array'];
        $model->save(false);
        $model = JsonTable::findOne(1);
        $I->assertEquals('bar as array', $model->data['foo']);
    }

    public function updateAsString(AcceptanceTester $I)
    {
        $model = JsonTable::findOne(1);
        $model->data = '{"foo":"bar as string"}';
        $model->save(false);
        $model = JsonTable::findOne(1);
        $I->assertEquals('bar as string', $model->data['foo']);
    }
}
