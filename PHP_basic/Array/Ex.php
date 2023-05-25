<?php
//1. Tìm giá trị lớn nhất, nhỏ nhất của mảng 1 chiều

$numArr = [1, 2, 3, 4, 5, 9, 20, 8];
if (!empty($numArr)) {
    $max = $numArr[0];
    foreach ($numArr as $key => $item) {
        if ($max <= $item) {
            $max = $item;
        }
    }
    echo "Giá trị lớn nhất là: $max <br/>";

    $min = $numArr[0];
    foreach ($numArr as $key => $item) {
        if ($min >= $item) {
            $min = $item;
        }
    }
    echo "Giá trị nhỏ nhất là: $min <br/>";
}
echo "<br/>";



//2. Tìm thông tin khách hàng nhỏ tuổi nhất trong mảng đa chiều
$customerArr = [
    [
        'name' => 'An',
        'age' => '20',
    ],
    [
        'name' => 'Lam',
        'age' => 30
    ],
    [
        'name' => 'Tien',
        'age' => 31
    ],
];

if (!empty($customerArr)) {
    $minCustomer = $customerArr[0];

    foreach ($customerArr as $item) {
        if ($minCustomer['age'] >= $item['age']) {
            $minCustomer = $item;
        }
    }
    echo '<pre>';
    print_r($minCustomer);
    echo '</pre>';
}
echo "<br/>";

//3. Tìm kiếm 1 biến bát kì

$keyword = "Tien";
$result = null;

if (!empty($customerArr)) {
    foreach ($customerArr as $item) {
        $customerName = $item['name'];
        $checkSearch = mb_stripos($customerName, $keyword, null, 'UTF-8');
        if($checkSearch !== false) {
            $result = $item;
            break;
        }
    }
    echo '<pre>';
    print_r($result);
    echo '</pre>';
}
echo "<br/>";



//4. Hiển thị menu đa cấp sử dụng giải thuật đệ quy
$menuArr = [
    [
        'title' => 'Trang chủ',
        'link' => '#'
    ],

    [
        'title' => 'Giới thiệu',
        'link' => '#'
    ],

    [
        'title' => 'Dịch vụ',
        'link' => '#',
        'sub' => [
            [
                'title' => 'Thiết kế web',
                'link' => '#'
            ],

            [
                'title' => 'Dịch vụ SEO',
                'link' => '#'
            ],

            [
                'title' => 'Phần mềm',
                'link' => '#',
                'sub' => [
                    [
                        'title' => 'Quản lý bán hàng',
                        'link' => '#'
                    ],

                    [
                        'title' => 'Quản lý khách hàng',
                        'link' => '#'
                    ],
                ]
            ],

            [
                'title' => 'Tin tức',
                'link' => '#'
            ],

            [
                'title' => 'Liên hệ',
                'link' => '#'
            ],
        ]
    ]
];

echo '<pre>';
    print_r($menuArr);
    echo '</pre>';