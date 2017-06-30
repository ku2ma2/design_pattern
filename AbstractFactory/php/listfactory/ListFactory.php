<?php

namespace listfactory;

require_once dirname(__DIR__) . '/factory/Factory.php';
require_once 'ListLink.php';
require_once 'ListPage.php';
require_once 'ListTray.php';

/**
 * 具体的な工場
 *
 * \factory\Factoryによって選ばれた(生成された)工場の具体的な実装。
 * 階層的な作りと考えると中間に当たる部分。
 *
 * @access public
 *
 * @extends \factory\Factory
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class ListFactory extends \factory\Factory
{
    public function createLink(string $caption, string $url)
    {
        return new ListLink($caption, $url);
    }
    public function createTray(string $caption)
    {
        return new ListTray($caption);
    }
    public function createPage(string $title, string $author)
    {
        return new ListPage($title, $author);
    }
}
