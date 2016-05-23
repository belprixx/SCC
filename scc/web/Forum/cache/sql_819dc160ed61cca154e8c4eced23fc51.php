<?php exit; ?>
<<<<<<< HEAD
1464011365
=======
1464009397
>>>>>>> 3e98a2c18a03af2ac120b83cb903d31d52809429
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (phpbb_moderator_cache m) LEFT JOIN phpbb_users u ON (m.user_id = u.user_id) LEFT JOIN phpbb_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}