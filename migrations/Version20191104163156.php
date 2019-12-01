<?php

namespace Mf\Slider;

use Mf\Migrations\AbstractMigration;
use Mf\Migrations\MigrationInterface;
use Zend\Db\Sql\Ddl;

class Version20191104163156 extends AbstractMigration implements MigrationInterface
{
    public static $description = "Create table for Slider";

    public function up($schema, $adapter)
    {
        $this->mysql_add_create_table=" ENGINE=MyIsam DEFAULT CHARSET=utf8 COMMENT='разные слайдеры'";
        $table = new Ddl\CreateTable("slider");
        $table->addColumn(new Ddl\Column\Integer('id',false,null,["AUTO_INCREMENT"=>true]));
        $table->addColumn(new Ddl\Column\Char('name', 255,false,null,["COMMENT"=>"Имя слайда"]));
        $table->addColumn(new Ddl\Column\Char('category', 50,false,null,["COMMENT"=>"Раздел"]));
        $table->addColumn(new Ddl\Column\Char('locale', 5,false,null,["COMMENT"=>"Локаль"]));
        $table->addColumn(new Ddl\Column\Char('alt', 255,false,null,["COMMENT"=>"ALT подпись слайда"]));
        $table->addColumn(new Ddl\Column\Integer('poz',true,null,["COMMENT"=>"порядок"]));
        $table->addColumn(new Ddl\Column\Integer('public',true,null,["COMMENT"=>"Публиковать"]));
        $table->addColumn(new Ddl\Column\Char('url', 255,true,null,["COMMENT"=>"URL внешнего перехода"]));
        $table->addColumn(new Ddl\Column\Char('link', 255,true,null,["COMMENT"=>"URL внутреннего перехода"]));
        $table->addColumn(new Ddl\Column\Char('caption1', 255,true,null,["COMMENT"=>"Надпись"]));
        $table->addColumn(new Ddl\Column\Char('caption2', 255,true,null,["COMMENT"=>"Надпись"]));
        $table->addColumn(new Ddl\Column\Char('caption3', 255,true,null,["COMMENT"=>"Надпись"]));
        $table->addColumn(new Ddl\Column\Char('title', 255,true));
        $table->addColumn(new Ddl\Column\Char('keywords', 255,true,null,["COMMENT"=>"URL внутреннего перехода"]));
        $table->addColumn(new Ddl\Column\Text('description', null,true));
        $table->addColumn(new Ddl\Column\Text('info', null,true));

        $table->addConstraint(
            new Ddl\Constraint\PrimaryKey(['id'])
        )->addConstraint(
            new Ddl\Index\Index(['locale'])
        )->addConstraint(
            new Ddl\Index\Index(['locale'])
        )->addConstraint(
            new Ddl\Index\Index(['category'])
        )->addConstraint(
            new Ddl\Index\Index(['link'])
        )->addConstraint(
            new Ddl\Index\Index(['public'])
        );
        $this->addSql($table);
    }

    public function down($schema, $adapter)
    {
        $drop = new Ddl\DropTable('slider');
        $this->addSql($drop);
    }
}
