<?php
namespace Build\Service;
use Think\Controller;

class DbService extends Controller{
	private $Model;
	protected function _initialize(){
		$this->Model = M();
	}
	public function index(){

	}
	//获取所有数据表
	public function getAllTableName(){
		$dbName = C('DB_NAME');
		$tableArray = $this->Model->query("select table_name from information_schema.tables where table_schema='".$dbName."' and table_type='base table'");
		$this->result = array();
		foreach ($tableArray as $table) {
			$result[]  = $table['table_name'];
		}
		$this->result = $result;
	}
	public function __toString(){
		echo 111;
	}
	public function dataDictionary(){
		$tables = $this->Model->query('show tables');
		dump($tables);die;
		$no_show_table = array();    //不需要显示的表
		$no_show_field = array();   //不需要显示的字段

		//循环取得所有表的备注及表中列消息
		foreach ($tables as $k=>$v) {
		    $sql  = 'SELECT * FROM ';
		    $sql .= 'INFORMATION_SCHEMA.TABLES ';
		    $sql .= 'WHERE ';
		    $sql .= "table_name = '".$v."'  AND table_schema = '".C('DB_NAME')."'";
		    $table_result = $this->Model->query($sql);
		    $tables[$k]['TABLE_COMMENT'] = $table_result['TABLE_COMMENT'];

		    $sql  = 'SELECT * FROM ';
		    $sql .= 'INFORMATION_SCHEMA.COLUMNS ';
		    $sql .= 'WHERE ';
		    $sql .= "table_name = '".$v."'  AND table_schema = '".C('DB_NAME')."'";

		    $fields = array();
		    $field_result = $this->Model->query($sql);
		    while ($t = mysql_fetch_array($field_result) ) {
		        $fields[] = $t;
		    }
		    $tables[$k]['COLUMN'] = $fields;
		}
		//循环所有表
		foreach ($tables as $k=>$v) {
		    $html .= '	<h3>' . ($k + 1) . '、' . $v['TABLE_COMMENT'] .'  （'. $v['TABLE_NAME']. '）</h3>'."\n";
		    $html .= '	<table border="1" cellspacing="0" cellpadding="0" width="100%">'."\n";
		    $html .= '		<tbody>'."\n";
			$html .= '			<tr>'."\n";
			$html .= '				<th>字段名</th>'."\n";
			$html .= '				<th>数据类型</th>'."\n";
			$html .= '				<th>默认值</th>'."\n";
			$html .= '				<th>允许非空</th>'."\n";
			$html .= '				<th>自动递增</th>'."\n";
			$html .= '				<th>备注</th>'."\n";
			$html .= '			</tr>'."\n";

		    foreach ($v['COLUMN'] as $f) {
				if(!is_array($no_show_field[$v['TABLE_NAME']])){
					$no_show_field[$v['TABLE_NAME']] = array();
				}
				if(!in_array($f['COLUMN_NAME'],$no_show_field[$v['TABLE_NAME']])){
					$html .= '			<tr>'."\n";
					$html .= '				<td class="c1">' . $f['COLUMN_NAME'] . '</td>'."\n";
					$html .= '				<td class="c2">' . $f['COLUMN_TYPE'] . '</td>'."\n";
					$html .= '				<td class="c3">' . $f['COLUMN_DEFAULT'] . '</td>'."\n";
					$html .= '				<td class="c4">' . $f['IS_NULLABLE'] . '</td>'."\n";
					$html .= '				<td class="c5">' . ($f['EXTRA']=='auto_increment'?'是':'&nbsp;') . '</td>'."\n";
					$html .= '				<td class="c6">' . $f['COLUMN_COMMENT'] . '</td>'."\n";
					$html .= '			</tr>'."\n";
				}
		    }
		    $html .= '		</tbody>'."\n";
			$html .= '	</table>'."\n";
		}
	}
	//插入字段
	public function addTabaleColumn(){
		// ALTER TABLE `gh_demageorder` ADD `currency` CHAR(30) NOT NULL COMMENT '货币名称' AFTER `amount`;
	}
	// 获取数据表列
	public function getTabaleColumn(){
		$tableName = I('tableName');
		$dbType = C('DB_TYPE');
		$dbName = C('DB_NAME');
		$this->result = $this->Model->query("select * from information_schema.columns where table_schema='".$dbName."' and table_name='".C('DB_PREFIX').$tableName."'");
		
	}
	// 创建数据表
	public function createTable(){
		$this->display();
	}
	// 执行mysql语句
	public function query(){
		$this->Model->query(I('query'));
	}
}