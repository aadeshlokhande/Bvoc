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
            $event_info = $this->security->xss_clean($this->db->get_where('event', array('event_id' => $param2))->result_array());
            foreach($event_info as $row):
        ?>
            <tr>
                <td><?php echo $this->lang->line('title'); ?></td>
                <td><?php echo $row['name']; ?></td>
            </tr>
            <tr>
                <td><?php echo $this->lang->line('permalink'); ?></td>
                <td><?php echo $row['permalink']; ?></td>
            </tr>
            <tr>
                <td><?php echo $this->lang->line('event_date'); ?></td>
                <td><?php echo date('d M, Y', $row['event_date']); ?></td>
            </tr>
            <tr>
                <td><?php echo $this->lang->line('event_time'); ?></td>
                <td><?php echo $row['event_time']; ?></td>
            </tr>
            <tr>
                <td><?php echo $this->lang->line('venue'); ?></td>
                <td><?php echo $row['venue']; ?></td>
            </tr>
            <tr>
                <td><?php echo $this->lang->line('paragraph_1'); ?></td>
                <td><?php echo $row['paragraph_1']; ?></td>
            </tr>
            <tr>
                <td><?php echo $this->lang->line('paragraph_2'); ?></td>
                <td><?php echo $row['paragraph_2']; ?></td>
            </tr>
            <tr>
                <td><?php echo $this->lang->line('paragraph_3'); ?></td>
                <td><?php echo $row['paragraph_3']; ?></td>
            </tr>
            <tr>
                <td><?php echo $this->lang->line('google_map'); ?></td>
                <td><?php echo $row['google_map']; ?></td>
            </tr>
            <tr>
                <td><?php echo $this->lang->line('hashtag'); ?></td>
                <td><?php echo $row['hashtag']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
