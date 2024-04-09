<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th><?php echo $this->lang->line('name'); ?></th>
                <th><?php echo $this->lang->line('email'); ?></th>
                <th><?php echo $this->lang->line('mobile'); ?></th>
            </tr>
        </thead>
        <tbody>
        <?php
            $rsvp_alumni = $this->security->xss_clean($this->db->get_where('rsvp', array('event_id' => $param2, 'rsvp' => $param3))->result_array());
            foreach ($rsvp_alumni as $row):
        ?>
            <tr>
                <td><?php echo $this->db->get_where('alumnus', array('alumnus_id' => $row['alumnus_id']))->row()->name; ?></td>
                <td><?php echo $this->db->get_where('alumnus', array('alumnus_id' => $row['alumnus_id']))->row()->email; ?></td>
                <td><?php echo $this->db->get_where('alumnus', array('alumnus_id' => $row['alumnus_id']))->row()->mobile_number; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
