<?php
/*
 *�������ļ��Է�ҳ��������˷�װ
 *
*/

class page_link
{
	var $page_max = 10; //һ��ҳ��������

	var $page_num = 10; //��ҳ��
	var $length = 20; //һҳ����������

	var $isNextPage = true;

	function Calculation_Page_Num( $total )
	{
		$this->page_num = ceil( $total / $this->length );
		return $this->page_num;
	}

	function Calculation_Min_Max( $act_page = 1 )
	{
		// ��������ƫ����
		$py_left = 0;
		$py_right = 0;
		// �������ұ߽�
		$bj_left = 0;
		$bj_right = 0;
		// �����������߽�
		$gd_left = 0;
		$gd_right = 0;
		// �ж��Ƿ���Ҫ����
		if ( ( $this->page_num - $this->page_max ) <= 0 )
		{
			// ����Ҫ����
			$bj_left = 1;
			$bj_right = $this->page_num;
		}
		else
		{
			// Ҫ���з���
			// �ж���������ż
			$tmp = $this->page_max % 2;
			if ( $tmp === 1 )
			{
				// ����
				$py_left = $py_right = ( $this->page_max - 1 ) / 2;
			}
			else
			{
				// ż��
				$py_left = $this->page_max / 2 - 1;
				$py_right = $this->page_max / 2;
			}
			// �����������
			$gd_left = 1 + $py_left;
			$gd_right = $this->page_num - $py_right;
			// �жϵ�ǰҳ�Ƿ������˹�������
			if ( $act_page >= $gd_left && $act_page <= $gd_right )
			{
				// ������
				$bj_left = $act_page - $py_left;
				$bj_right = $act_page + $py_right;
			}
			else
			{
				// ������
				if ( ( $act_page - $py_left ) <= 1 )
				{
					// ���̶�����
					$bj_left = 1;
					$bj_right = $this->page_max;
				}
				else
				{
					$bj_left = $this->page_num - $this->page_max + 1;
					$bj_right = $this->page_num;
				}
			}
		}

		$res = array();
		$res['min'] = $bj_left;
		$res['max'] = $bj_right;

		return $res;
		/*
		//����������
		$s_min = ceil($this -> page_max / 2);
		$s_max = $this -> page_num - $this -> page_max;
		$s1_max = $this -> page_num - $s_min;

		if($s_max <= 0)
		{
			$begin = 1;
			$end = $this -> page_num;
		}
		else
		{
			if($act_page > $s_min && $act_page <= $s1_max)
			{
				//���ڹ���������
		$begin = 0 - $s_min + $act_page;
		$end = $s_min - 1 + $act_page;
		}
		else
		{
		if($act_page <= $s_min)
		{
		$begin = 1;
		$end = $this -> page_max;
		}
		else
		{
		//$begin = $s_min;

		$begin = $this -> page_num - $this -> page_max +1;
		$end = $this -> page_num;
		}
		}
		}
		$res = array();
		$res['min'] = $begin;
		$res['max'] = $end;

		return $res;
		 */
	}
	// ������
	function make_page( $total, $act_page, $url, $param )
	{
		$page_num = $this->Calculation_Page_Num( $total );
		$arr_min_max = $this->Calculation_Min_Max( $act_page );

		if ( $act_page > $page_num )
		{
			$act_page = $page_num;
		}
		// �������url�ĳ������
		$url = eregi_replace( $param . '=[0-9]+', $param . '=0', $url );

		$res = array();
		$d = 0;
		for( $i = $arr_min_max['min'];$i <= $arr_min_max['max'];$i++ )
		{
			if ( $i == $act_page )
			{
				$res[$d]['url'] = '';
				$res[$d]['name'] = $i;
				$res[$d]['no'] = $i;
			}
			else
			{
				$res[$d]['url'] = str_replace( $param . '=0', $param . '=' . $i, $url );
				$res[$d]['name'] = $i;
				$res[$d]['no'] = $i;
			}
			$d++;
		}

		if ( $this->isNextPage )
		{
			//$res = $this->make_before_next_link( $res, $act_page, $url, $param );
		}
		return $res;
	}
	// ������һҳ����һҳ
	function make_before_next_link( $arr, $act, $url, $param )
	{
		$tmp = array();

		$before = $act - 1;
		$next = $act + 1;

		if ( $before < 1 )
		{
			$before = 1;
			$tmp[0]['url'] = '';
			$tmp[0]['name'] = "Prev";
			$tmp[0]['no'] = $before;
		}
		else
		{
			$tmp[0]['url'] = str_replace( $param . '=0', $param . '=' . $before, $url );
			$tmp[0]['name'] = "Prev";
			$tmp[0]['no'] = $before;
		}

		$counts = sizeof( $arr );
		$tmp_count = sizeof( $tmp );
		for( $i = 0;$i < $counts;$i++ )
		{
			$tmp[$tmp_count]['url'] = $arr[$i]['url'];
			$tmp[$tmp_count]['name'] = $arr[$i]['name'];
			$tmp[$tmp_count]['no'] = $arr[$i]['no'];
			$tmp_count++;
		}

		if ( $next > $this->page_num )
		{
			$next = $this->page_num;
			$tmp[$tmp_count]['url'] = '';
			$tmp[$tmp_count]['name'] = "Next";
			$tmp[$tmp_count]['no'] = $next;
		}
		else
		{
			$tmp[$tmp_count]['url'] = str_replace( $param . '=0', $param . '=' . $next, $url );
			$tmp[$tmp_count]['name'] = "Next";
			$tmp[$tmp_count]['no'] = $next;
		}

		return $tmp;
	}
}

?>
