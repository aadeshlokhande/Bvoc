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
            $volunteers = $this->security->xss_clean($this->db->get_where('event_management', array('event_management_id' => $param2))->row()->volunteers);
            foreach (explode(",", $volunteers) as $key => $value):
                if ($value > 0):
        ?>
            <tr>
                <td><?php echo $this->db->get_where('volunteer', array('volunteer_id' => $value))->row()->name; ?></td>
                <td><?php echo $this->db->get_where('volunteer', array('volunteer_id' => $value))->row()->email; ?></td>
                <td><?php echo $this->db->get_where('volunteer', array('volunteer_id' => $value))->row()->mobile; ?></td>
            </tr>
        <?php
                endif; 
            endforeach; 
        ?>
        </tbody>
    </table>
</div>
