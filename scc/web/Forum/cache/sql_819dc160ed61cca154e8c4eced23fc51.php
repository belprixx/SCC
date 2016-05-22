<?php exit; ?>
<<<<<<< HEAD
1463940013
=======
1463924259
>>>>>>> a7fd2c917f87bea2cb014f174e187386a266a781
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (phpbb_moderator_cache m) LEFT JOIN phpbb_users u ON (m.user_id = u.user_id) LEFT JOIN phpbb_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}