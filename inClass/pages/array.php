<?php
session_destroy();
require_once '../global/global.php';
session_name('array');
session_start();

?>
<!DOCTYPE html>
<html lang='en'>
    <?php echo render_title(session_name()); ?>
    <body>
        <main>
            <div class="container">
                <div class="bann">Menu</div>
                <div class="head" style="grid-area:head;text-align:center" >
                    <h1><?php echo render_header(session_name()); ?></h1>
                </div>
                <div class="navi">
                    <?php echo render_nav(session_name()); ?>
                </div>
                <div class="cont">
                    <?php 
                    echo 'Here is an array of 7 musical terms';
                    echo '<br>';
                    $array = array(
                        'a' => 'EGBDF',
                        'b' => 'ACEG',
                        'c' => 'Treble',
                        'd' => 'bass',
                        'e' => 'common',
                        'f' => 'march',
                        'g' => 'waltz'
                    );
                    print_r($array);
                    echo '<p/>';
                    echo 'Let us change the case of the keys in the array<br>';
                    $array = array_change_key_case($array, CASE_UPPER);
                    print_r($array);
                    echo '<p />Here is an array of new terms<br>';
                    $array1 = array(
                        'a' => 'alto',
                        'b' => 'soprano',
                        'c' => 'tenor',
                        'd' => 'bass'
                    );
                    print_r($array1);
                    echo '<p />Let us merge them<br>';
                    $array_merger = array_merge($array, $array1);
                    print_r($array_merger);
                    echo '<p />Finaly let us randomize the array<br>';
                    /// copied from http://php.net/manual/en/function.shuffle.php
                    function shuffle_assoc(&$array) {
                        $keys = array_keys($array);

                        shuffle($keys);

                        foreach($keys as $key) {
                            $new[$key] = $array[$key];
                        }

                        $array = $new;

                        return true;
                    }
                    shuffle_assoc($array_merger);
                    print_r($array_merger);
                    /*shuffle($array);
                    $array = array_slice($array, 0, 10);
                    foreach($array as $i) {
                        print $array[$i];
                        echo '<br>';
                    }*/

                    ?>
                </div>
                <div class="foot">
                    <?php echo date('l jS'), '<br>', date('F Y'), '<br>'; ?>
                    Charles Oroko
                </div>
            </div>
        </main>
    </body>
</html>