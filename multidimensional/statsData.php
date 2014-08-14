<script type="text/javascript">
    var data = <?php
                $data = array();

                //Bar
                $data['bar'] = array(
                    'categories' => array('Apples', 'Bananas', 'Oranges'),
                    'series' => array(
                        array('name' => 'Jane', 'data' => array(1, 10, 4)),
                        array('name' => 'Jonh', 'data' => array(5, 7, 3))
                    )
                );
                echo json_encode($data);
                ?>
</script>