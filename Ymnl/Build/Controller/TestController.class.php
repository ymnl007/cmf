<?php
namespace Build\Controller;
use Think\Controller;
//测试用的
class TestController extends Controller{
	//测试类似jquery的dom操作，可用与采集
	public function testQuery(){
		Vendor('Zend.Dom.Query');
		$html = '<div><table>
		        <tr>
		            <td class="foo">
		                <div>
		                    Lorem ipsum <span class="bar">
		                        <a href="/foo/bar" id="one">One</a>
		                        <a href="/foo/baz" id="two">Two</a>
		                        <a href="/foo/bat" id="three">Three</a>
		                        <a href="/foo/bla" id="four">Four</a>
		                    </span>
		                </div>
		            </td>
		        </tr>
    		</table>
		</div>';
		$dom = new \Zend_Dom_Query($html);
		$results = $dom->query('.foo .bar a');
		// dump($dom->_getNodeList($html,'.foo .bar a'));
		// dump();
		$count = count($results); // get number of matches: 4
		foreach ($results as $result) {
			// dump($result->parentNode);
    		echo $result->nodeValue."<br/>";
    		echo $result->getAttribute('href');
		}
		$this->display();
	}
}