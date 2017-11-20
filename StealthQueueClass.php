<?php
// Set the namespace defined in your config file
namespace FredHutchNamespace\StealthQueueClass;
// The next 2 lines should always be included and be the same in every module
use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;
// Declare your module class, which must extend AbstractExternalModule 
class StealthQueueClass extends AbstractExternalModule {
    function redcap_survey_page($project_id, $record, $instrument, $event_id, $group_id, $repeat_instance) 
    {
        ?>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#survey_queue_corner").hide()
        });
        </script>
        <?php	
    }
    function redcap_survey_complete($project_id, $record, $instrument, $event_id, $group_id, $repeat_instance) 
    {
        ?>
			<script type="text/javascript">
			$(document).ready(function() {
				$("#survey_queue").hide();
			});
			</script>
			<?php	
    }    
}