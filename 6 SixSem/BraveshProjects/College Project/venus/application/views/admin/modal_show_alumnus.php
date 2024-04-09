<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th><?php echo $this->lang->line('name'); ?></th>
                <th><?php echo $this->lang->line('content'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $alumnus_info = $this->security->xss_clean($this->db->get_where('alumnus', array('alumnus_id' => $param2))->result_array());
            foreach ($alumnus_info as $row) :
            ?>
                <tr>
                    <td><?php echo $this->lang->line('username'); ?></td>
                    <td><?php echo $row['username']; ?></td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('date_of_birth'); ?></td>
                    <td>
                        <?php
                        if ($row['dob'])
                            echo date('d M, Y', $row['dob']);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('location'); ?></td>
                    <td>
                        <?php
                        echo $row['location_id'] ? $this->db->get_where('location', array('location_id' => $row['location_id']))->row()->name : 'N/A';
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('website'); ?></td>
                    <td>
                        <?php if ($row['website']) : ?>
                            <a href="<?php echo $row['website']; ?>" target="_blank">Link</a>
                        <?php else : ?>
                            <?php echo 'N/A'; ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('position'); ?></td>
                    <td><?php echo $row['position']; ?></td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('profession'); ?></td>
                    <td>
                        <?php
                        echo $row['profession_id'] ? $this->db->get_where('profession', array('profession_id' => $row['profession_id']))->row()->name : 'N/A';
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('short_biography'); ?></td>
                    <td><?php echo $row['short_bio']; ?></td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('facebook'); ?></td>
                    <td>
                        <?php if ($row['facebook']) : ?>
                            <a href="<?php echo $row['facebook']; ?>" target="_blank">Link</a>
                        <?php else : ?>
                            <?php echo 'N/A'; ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('twitter'); ?></td>
                    <td>
                        <?php if ($row['twitter']) : ?>
                            <a href="<?php echo $row['twitter']; ?>" target="_blank">Link</a>
                        <?php else : ?>
                            <?php echo 'N/A'; ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('linkedin'); ?></td>
                    <td>
                        <?php if ($row['linkedin']) : ?>
                            <a href="<?php echo $row['linkedin']; ?>" target="_blank">Link</a>
                        <?php else : ?>
                            <?php echo 'N/A'; ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('youtube'); ?></td>
                    <td>
                        <?php if ($row['youtube']) : ?>
                            <a href="<?php echo $row['youtube']; ?>" target="_blank">Link</a>
                        <?php else : ?>
                            <?php echo 'N/A'; ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('story_permission'); ?></td>
                    <td>
                        <?php if ($row['story_permission']) : ?>
                            <p>Yes</p>
                        <?php else : ?>
                            <p>No</p>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $this->lang->line('deceased'); ?></td>
                    <td>
                        <?php if ($row['deceased']) : ?>
                            <p>Yes</p>
                        <?php else : ?>
                            <p>No</p>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>