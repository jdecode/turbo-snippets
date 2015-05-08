<?php

$debug = '0';

$array2 = Array
	(
	0 => Array
		('id' => '1002', 'fname' => 'Jake', 'lname' => 'Bell', 'email' => 'jake@a.com', 'aff_id' => '0', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	1 => Array
		('id' => '1003', 'fname' => 'Jill', 'lname' => 'Smith', 'email' => 'jill@a.com', 'aff_id' => '1002', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	2 => Array
		('id' => '1004', 'fname' => 'Bob', 'lname' => 'Bagga', 'email' => 'Bob@a.com', 'aff_id' => '1002', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	3 => Array
		('id' => '1005', 'fname' => 'Vinnie', 'lname' => 'Jones', 'email' => 'Vinne@a.com', 'aff_id' => '1002', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	4 => Array
		('id' => '1006', 'fname' => 'Roy', 'lname' => 'Jenkins', 'email' => 'roy@a.com', 'aff_id' => '1002', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	5 => Array
		('id' => '1007', 'fname' => 'Andy', 'lname' => 'White', 'email' => 'andy@a.com', 'aff_id' => '1002', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	6 => Array
		('id' => '1008', 'fname' => 'Ellie', 'lname' => 'Gold', 'email' => 'ellie@a.com', 'aff_id' => '1007', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	7 => Array
		('id' => '1009', 'fname' => 'Terry', 'lname' => 'Brown', 'email' => 'terry@a.com', 'aff_id' => '1005', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	8 => Array
		('id' => '1010', 'fname' => 'Chris', 'lname' => 'Rad', 'email' => 'chris@a.com', 'aff_id' => '1007', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	9 => Array
		('id' => '1011', 'fname' => 'Mark', 'lname' => 'Vita', 'email' => 'mark@a.com', 'aff_id' => '1004', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	10 => Array
		('id' => '1012', 'fname' => 'Robert', 'lname' => 'Dalt', 'email' => 'robert@a.com', 'aff_id' => '1003', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	11 => Array
		('id' => '1013', 'fname' => 'Lynn', 'lname' => 'Taylor', 'email' => 'lynn@a.com', 'aff_id' => '1010', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	12 => Array
		('id' => '1014', 'fname' => 'Mel', 'lname' => 'Franks', 'email' => 'mel@a.com', 'aff_id' => '1005', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	13 => Array
		('id' => '1017', 'fname' => 'Kristy', 'lname' => 'Steff', 'email' => 'Kristy@a.com', 'aff_id' => '1004', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	14 => Array
		('id' => '1018', 'fname' => 'Billy', 'lname' => 'Gate', 'email' => 'Billy@a.com', 'aff_id' => '1013', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	15 => Array
		('id' => '1020', 'fname' => 'John', 'lname' => 'Smith', 'email' => 'john@a.com', 'aff_id' => '1005', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	16 => Array
		('id' => '1021', 'fname' => 'Ted', 'lname' => 'Goul', 'email' => 'Ted@a.com', 'aff_id' => '1014', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	17 => Array
		('id' => '1023', 'fname' => 'Valerie', 'lname' => 'Johnson', 'email' => 'valerie@a.com', 'aff_id' => '1003', 'reg_date' => '2015-04-20 11:02:10', 'L' => '', 'R' => ''),
	18 => Array
		('id' => '1030', 'fname' => 'Lakesha', 'lname' => 'Brown', 'email' => 'brown@a.com', 'aff_id' => '1011', 'reg_date' => '2015-04-20 11:02:10')
);

function pr($a) {
	echo '<pre>';
	print_r($a);
	echo '</pre>';
}

function prx($a) {
	pr($a);
	die;
}

$v = 1001;
$array = array(
	$v => array(
		'id' => $v,
		'fname' => 'JD',
		'lname' => 'Singh',
		'email' => 'jdecode@gmail.com',
		'aff_id' => 0,
		'L' => 0,
		'R' => 0,
	)
);

for ($i = 2; $i <= 18; $i++) {
	$v++;
	$array[$v] = array(
		'id' => $v,
		'fname' => $array2[$i]['fname'],
		'lname' => $array2[$i]['lname'],
		'email' => $array2[$i]['email'],
		'aff_id' => 1001,
		'L' => 0,
		'R' => 0,
	);
}

function check_next_vacant_position($k1, $v1) {
	global $na;
	//pr($na);
	foreach ($na as $k => $v) {
		if (!$v['L']) {
			$na[$k]['L'] = array(
				'id' => $v1['id'],
				'level' => $v['level'] + 1,
				'parent' => $k,
				'L' => 0,
				'R' => 0
			);
			return array('id' => $k, 'parent' => $k, 'level' => ($v['level'] + 1), 'pos' => 'L');
		}
		if (!$v['R']) {
			$na[$k]['R'] = array(
				'id' => $v1['id'],
				'level' => $v['level'] + 1,
				'parent' => $k,
				'L' => 0,
				'R' => 0
			);
			return array('id' => $k, 'parent' => $k, 'level' => ($v['level'] + 1), 'pos' => 'R');
		}

		$_r = search_in_root($k1, $v, $k);
		return ($_r);
	}
}

function search_in_root($k1, $v, $k2) {
	pr($k1);
	pr($v);
	prx($k2);
	global $na;
	//pr($na);
	global $debug;
	if ($debug) {
		//$na = $nb;
		//pr($nb);
		//pr($k1);
		//pr($v);
		//prx($k2);
	}
	foreach ($v as $_k => $_v) {
		if ($_k == 'L' || $_k == 'R') {
			if ($_k == 'L') {
				if (!$_v['L']) {
					if ($debug) {
						pr($k2);
						pr($_v);
					}
					//$key = generate_key($na, $_v);
					$na[$k2]['L']['L'] = array(
						//$v['L']['L'] = array(
						'id' => $k1,
						'level' => $_v['level'] + 1,
						'parent' => $_v['id'],
						'L' => 0,
						'R' => 0
					);
					return;
					//return array('id' => $_v['id'], 'parent' => $_v['id'], 'level' => ($_v['level'] + 1), 'pos' => 'L');
				}
				if (!$_v['R']) {
					$na[$k2]['L']['R'] = array(
						//$v['L']['R'] = array(
						'id' => $k1,
						'level' => $_v['level'] + 1,
						'parent' => $_v['id'],
						'L' => 0,
						'R' => 0
					);
					return;
					//return array('id' => $_v['id'], 'parent' => $_v['id'], 'level' => ($_v['level'] + 1), 'pos' => 'R');
				}
			}
			if ($_k == 'R') {
				if (!$_v['L']) {
					$na[$k2]['R']['L'] = array(
						//$v['R']['L'] = array(
						'id' => $k1,
						'level' => $_v['level'] + 1,
						'parent' => $_v['id'],
						'L' => 0,
						'R' => 0
					);
					return;
					//return array('id' => $_v['id'], 'parent' => $_v['id'], 'level' => ($_v['level'] + 1), 'pos' => 'L');
				}
				if (!$_v['R']) {
					$na[$k2]['R']['R'] = array(
						//$v['R']['R'] = array(
						'id' => $k1,
						'level' => $_v['level'] + 1,
						'parent' => $_v['id'],
						'L' => 0,
						'R' => 0
					);
					return;
					//return array('id' => $_v['id'], 'parent' => $_v['id'], 'level' => ($_v['level'] + 1), 'pos' => 'R');
				}
			}
		} else {
			continue;
		}
	}
}

/**
 * Temporary method, may not be required at all. Halted.
 */
function generate_key($na, $_v) {
	pr($na);
	prx($_v);
	$key = array();
	foreach ($na as $k => $v) {
		
	}
}

//prx($array);

$na = array();

$_current_parent = 0;
$_current_level = 0;
$break = 0;


$array[1007]['aff_id'] = 1005;
$array[1008]['aff_id'] = 1007;
$array[1009]['aff_id'] = 1007;
$array[1011]['aff_id'] = 1002;
$array[1012]['aff_id'] = 1002;
$array[1013]['aff_id'] = 1005;
$array[1014]['aff_id'] = 1005;
$array[1015]['aff_id'] = 1008;
$array[1016]['aff_id'] = 1013;
$array[1017]['aff_id'] = 1015;
$array[1018]['aff_id'] = 1016;
pr("Original Array");
pr($array);
pr("Binary Tree formatted Array");
$i = 1;
foreach ($array as $k => $v) {
	// If affiliate id is 0, then create the root node
	if (!$v['aff_id']) {
		// i = 1;
		$na[0] = array('id' => $k, 'level' => $_current_level, 'parent' => 0, 'L' => 0, 'R' => 0);
		$_current_parent = 0;
		$_root_node = 0;
		continue;
	}
	if (!$na[0]['L']) {
		// Still i = 1
		$na[0]['L'] = array(
			'id' => $v['id'],
			'level' => 1,
			'parent' => $v['aff_id'],
			'L' => 0,
			'R' => 0
		);
		continue;
	}
	if (!$na[0]['R']) {
		// Still i = 1
		$na[0]['R'] = array(
			'id' => $v['id'],
			'level' => 1,
			'parent' => $v['aff_id'],
			'L' => 0,
			'R' => 0
		);
		continue;
	}
	//pr($v);
	find_parent($v, $na);
	if ($i == 11) {
		//pr(1);
		//prx($na);
	}
	$i++;
}
prx($na);

function find_parent($v, &$na) {
	if (!is_array($na)) {
		return;
	}
	foreach ($na as $_k => $_v) {
		if ($_v['id'] == $v['aff_id']) {
			//pr($v);
			//pr($na);
			if (!fit_node_under_parent($v, $na[$_k])) {
				//prx($na[$_k]);
				fit_node_under_parent_2($v, $na[$_k]);
			}
			return;
		}
	}
	foreach ($na as $_k => $_v) {
		find_parent($v, $na[$_k]);
	}
}

function fit_node_under_parent($v, &$parent) {
	/*
	  pr('Parent start');
	  pr($v);
	  pr($parent);
	  pr('Parent End');
	 */
	foreach ($parent as $_k => $_v) {
		if (in_array($_k, array('L', 'R'))) {
			//pr($v);
			//pr("The ID is L or R, it's : $_k");
			//pr($parent);
			//pr($_v);
			// If Value is 0, then save $v in whatever it is (L or R)
			// But if it is an array, then check 
			if (!$_v) {
				//pr($v);
				//pr($_k);
				//pr($parent);

				$parent[$_k] = array(
					'id' => $v['id'],
					'level' => $parent['level'] + 1,
					'parent' => $v['aff_id'],
					'L' => 0,
					'R' => 0
				);
				//pr($parent);
				return true;
			} else {
				//pr($parent);
				if (!$parent['R']) {
					$parent['R'] = array(
						'id' => $v['id'],
						'level' => $parent['level'] + 1,
						'parent' => $v['aff_id'],
						'L' => 0,
						'R' => 0
					);
					//pr($parent);
					return true;
				} else {
					
				}
			}
			//pr($_k);
			//pr($_v);
			if (isset($_v['L']) && !$_v['L']) {
				//pr("The L is EMPTY ");
				//pr($v);
				//pr($_v);
				if (isset($parent[$_k]['L'])) {
					$parent[$_k]['L'] = array(
						'id' => $v['id'],
						'level' => $_v['level'] + 1,
						'parent' => $_v['id'],
						'L' => 0,
						'R' => 0
					);
				}
				return true;
			} else {
				if (isset($_v['R']) && !($_v['R'])) {
					//pr("The R is EMPTY ");
					//pr($v);
					if (isset($parent[$_k]['R'])) {
						$parent[$_k]['R'] = array(
							'id' => $v['id'],
							'level' => $_v['level'] + 1,
							'parent' => $_v['id'],
							'L' => 0,
							'R' => 0
						);
					}
					return true;
				}
			}
			//pr($v);
			//pr($parent);
			//return false;
		} else {
			//pr("The ID is not L or R, it's $_k");
		}
	}
	return false;
}

function fit_node_under_parent_2($v, &$parent) {
	//pr($v);
	//pr($parent);

	if (is_array($parent)) {
		if (!($parent['L'])) {
			$parent['L'] = array(
				'id' => $v['id'],
				'level' => ($parent['level'] + 1),
				'parent' => $parent['L']['id'],
				'L' => 0,
				'R' => 0
			);
			return true;
		} else if (!($parent['R'])) {
			$parent['R'] = array(
				'id' => $v['id'],
				'level' => ($parent['level'] + 1),
				'parent' => $parent['L']['id'],
				'L' => 0,
				'R' => 0
			);
			return true;
		} else {
			//pr("{$parent['level']}");
			if(!find_by_level($parent['L'], $parent['level'], $v)) {
				find_by_level($parent['R'], $parent['level'], $v);
			}
		}
	}
	/*
	foreach ($parent as $_k => $_v) {
		if (in_array($_k, array('L', 'R'))) {
			$counter++;
			if (!($_v)) {
				$parent[$_k] = array('id' => $v['id'], 'level' => ($parent['level'] + 1), 'parent' => $parent[$_k]['id'], 'L' => 0, 'R' => 0);
				return;
			}
			if ($counter) {
				find_by_level($parent[$_k], ($parent['level'] + 1), $v);
			}
			if ($counter == 2) {
				$counter = 0;
			}
		}
	}
	*/
	//prx($parent);
}

function find_by_level(&$parent, $level, $v) {
	//pr("level wise: $level");
	//pr($parent);
	if (is_array($parent)) {
		if (!($parent['L'])) {
			$parent['L'] = array(
				'id' => $v['id'],
				'level' => ($parent['level'] + 1),
				'parent' => $parent['L']['id'],
				'L' => 0,
				'R' => 0
			);
			return true;
		} else if (!($parent['R'])) {
			$parent['R'] = array(
				'id' => $v['id'],
				'level' => ($parent['level'] + 1),
				'parent' => $parent['R']['id'],
				'L' => 0,
				'R' => 0
			);
			return true;
		} else {
			if(!find_by_level($parent['L'], $parent['level'], $v)) {
				find_by_level($parent['R'], $parent['level'], $v);
			}
		}
	}
}

/*
function fit_node_under_parent_with_kids($v, &$parent) {

	$_values = array();

	pr('Parent start');
	pr($v);
	pr($parent);
	pr('Parent End');

	foreach ($parent as $_k => $_v) {
		if (in_array($_k, array('L', 'R'))) {
			if (!($_v)) {
				$parent[$_k] = array('id' => $v['id'], 'level' => $_v['level'], 'parent' => $_v['id'], 'L' => 0, 'R' => 0);
				pr('DONE');
				prx($parent);
				return;
			} else {
				pr($parent['id']);
				pr($_k);
				if (!$_v['L']) {
					pr($_v);
				} else {
					$_values[] = $parent[$_k]['L'];
				}
				if (!$_v['R']) {
					pr($_v);
				} else {
					$_values[] = $parent[$_k]['R'];
				}
				
			}
		}
		if (is_numeric($_k)) {
			if (!$_v['L']) {
				$parent[$_k] = array('id' => $v['id'], 'level' => $_v['level'], 'parent' => $_v['id'], 'L' => 0, 'R' => 0);
				pr('DONE');
				prx($parent);
				//pr($_v);
			} else {
				$_values[] = $parent[$_k]['L'];
			}
			if (!$_v['R']) {
				pr($_v);
			} else {
				$_values[] = $parent[$_k]['R'];
			}
		}
	}
	//prx($_values);
	fit_node_under_parent_with_kids($v, $_values);
	//foreach ($_values as $__k => $__v) {
		//fit_node_under_parent($v, $__v);
	//}
	//return false;
}
*/
