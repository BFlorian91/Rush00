<?php

    function display_members()
    {
        $members = unserialize(file_get_contents("../private/passwd"));
?>      <table class="value_table">
            <thead>
                <tr>
                    <th colspan="2"><b>user<b/></th>
                </tr>
            </thead>
            <?php   foreach ($members as $key => $val) { ?>
            <tr>
                <td><?php  echo $val['login'] ?></td>
                    <?php if ($members[$key]['ban']):?>
                        <form action="../model/ban_users.php" method="POST">
                            <input type="hidden" name="login" value="<?php echo $val['login']?>">
                            <input style="float: right; width:100px; margin-right: 10px;" name="submit" type="submit" class="button_in_form" value="unban">
                        </form>
                    <?php else:?>
                        <form action="../model/ban_users.php" method="POST">
                            <input type="hidden" name="login" value="<?php echo $val['login']?>">
                            <input style="float: right; width:100px; margin-right: 10px;" name="submit" type="submit" class="button_in_form" value="ban">
                        </form>
                    <?php endif; ?>
                        <form action="../model/action_remove_user.php" method="POST">
                            <input type="hidden" name="login" value="<?php echo $val['login']?>">
                            <input style="float: right; width:100px; margin-right: 10px;" type="submit" class="button_in_form" value="remove">
                        </form>
            </tr>
            </table>
<?php       }
    }