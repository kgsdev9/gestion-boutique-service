<?php

return [

	/******* Main Template *******/
    'title' => 'Forms',
    'start_date' => 'Start Date',
    'end_date' => 'End Date',
    'all' => 'All',
    'filter' => 'Filter',
    'filter_search' => 'Filter by Employee or Task Name',
    'changes_success' => 'Changes have been successfuly made',
    'list' => 'Forms List',
    'employees' => '{1} Employee|[2,*] Employees',
    'type' => 'Type',
    'date' => 'Date',
    'task' => 'Task',
    'view' => 'View',

    /******* Single Template *******/
    'form' => 'Form',
    'form_type' => 'Form Type',
    'filled_by' => 'Filled By',
    'date_filled' => 'Date Filled',
    'execution_time' => 'Form Execution Time',
    'time_in' => 'Time In',
    'time_out' => 'Time Out',
    'related_task' => 'Related Task',
    'question' => 'Question',
    'answer' => 'Answer',

    /******* Covid Form *******/
    'covid' => [
        'title' => 'Covid-19',
    ],

    /******* Take 5 Form *******/
    'take5' => [
        'title' => 'Take 5',
        'subtitle1' => 'Think through the task',
        'subtitle2' => 'Hazards',
        'subtitle3' => 'Precautions',
        'subtitle4' => 'Safety',
        'yes' => 'Yes',
        'no' => 'No',
        'question' => 'Question',
        'q1' => 'Is there something different today ?',
        'q2' => 'Are there any risk above ?',
        'q3' => 'Are there any risk below ?',
        'q4' => 'Are there any risk in front/Behind ?',
        'q5' => 'Are there any risk inside ?',
        'q6' => 'Is there a job procedure for this task ?',
        'q7' => 'Do I understand the work and the appropriate methods ?',
        'q8' => 'Is a permit required ?',
        'q9' => '&#8618; Confined Space',
        'q10' => '&#8618; Hot Work',
        'q11' => '&#8618; Excavation',
        'q12' => '&#8618; Vegetation Clearing',
        'q13' => '&#8618; Other',
        'q14' => 'Does the task involve hazardous material ?',
        'q15' => 'Do I have the appropriate tools/equipment/PPE and are they in good condition ?',
        'q16' => 'Can I perform the task safely?',
        'no_hazards' => 'No Hazards',
        'no_precautions' => 'No Precautions',
    ],

    /******* Maintenance Form *******/
    'maintenance' => [
        'title' => 'Maintenance',
        'yes' => 'Yes',
        'no' => 'No',
        'comments' => 'Comments',
        'question' => 'Question',
        'subtitle1' => 'FEED FLOATING END',
        'subtitle2' => 'DISCHARGE FIXED END',
        'subtitle3' => 'HIGH SPEED DRIVE',
        'subtitle4' => 'LOW SPEED DRIVE',
        'subtitle5' => 'GEAR SPRAY',
        'subtitle6' => 'MOTOR',
        'drive_end' => 'DRIVE END',
        'non_drive_end' => 'NON DRIVE END',
        'stator' => 'STATOR',
        'q1' => 'TRUNNION BEARING HOUSING LEVEL',
        'q2' => 'TRUNNION OIL FLOW INSIDE BEARING',
        'q3' => 'VERIFY OILING RING ROTATING',
        'q4' => 'TRUNNION TEMPERATURES RECORD ON SPREADSHEET',
        'q5' => 'TRUNNION POSITIVE PUMP PRESSURE RECORD ON SPREADSHEET',
        'q6' => 'VERIFY IF ANY LEAKS ARE APPARENT AROUND BEARING HOUSINGS',
        'q7' => 'PINION TEMPERATURE PROFIL RECORD ON SPREADSHEET',
        'q8' => 'LEFT SIDE PINION BEARING TEMPARATURE RECORD ON SPREADSHEEET',
        'q9' => 'RIGHT SIDE PINION BEARING TEMPARATURE RECORD ON SPREADSHEEET',
        'q10' => 'VERIFY OIL FLOWS',
        'q11' => 'VERIFY INTERMEDIATE PUMP PRESSURE RECORD ON SPREADSHEET',
        'q12' => 'VERIFY AND NOTE ANY LEAKS',
        'q13' => 'VERIFY GREASE LEVEL IN DRUM',
        'q14' => 'VERIFY FUNCTIONALITY JOG BUTTOM',
        'q15' => 'VERIFY REVERSING BLOC FUNCTIONALITY',
        'q16' => 'VERIFY GREASE SPENT BUCKET',
        'q17' => 'VERIFY MOTOR BEARING TEMPERATURES RECORD ON SPREADSHEET',
        'q18' => 'VERIFY THE MOTOR OILING RING ROTATION',
        'q19' => 'VERIFY OIL LEVEL',
    ],

    /******* Driver Form *******/
    'driver' => [
        'title' => 'Driver',
        'vehicle' => 'Vehicle',
        'vehicle_used' => 'Vehicle Used',
        'license_plate_number' => 'License Plate Number',
        'path' => 'Path',
        'departure_location' => 'Departure Location',
        'destination' => 'Destination',
        'departure_time' => 'Departure Time',
        'arrival_time' => 'Arrival Time',
        'additional_info' => 'Additional Information',
        'object_transported' => 'Object Transported',
        'notes' => 'Notes',
    ],

    /******* Blaster Form *******/
    'blaster' => [
        'title' => 'Blaster',
        'location' => 'Location',
        'explosive_pickup_location' => 'Explosive Pickup Location',
        'main_trench' => 'Main Trench',
        'hole_1' => '1 Hole',
        'hole_2' => '2 Holes',
        'hole_3' => '3 Holes',
        'secondary_trench' => 'Secondary Trench',
        'infra_m3' => 'Infra M3',
        'infra_m2' => 'Infra M2',
        'others' => 'Others',
        'comments' => 'Comments',
        'materials' => 'Materials',
        'no_materials_used' => 'No Materials Used',
        'image' => 'Image',
        'images' => 'Images',
        'no_images' => 'No Images',
    ],

    /******* Shooting Log Form *******/
    'shooting_log' => [
        'title' => 'Shooting Log',
        'information' => 'Information',
        'site_location' => 'Site Location',
        'location_chaining' => 'Location / Chaining',
        'project_number' => 'Project Number',
        'shoot_number' => 'Shoot Number',
        'flights_number' => 'Flights Number',
        'wheater_conditions' => 'Weather Conditions',
        'temperature' => 'Temperature',
        'wind_direction' => 'Wind Direction and Speed',
        'sky' => 'Sky',
        'drilling_data' => 'Drilling Data',
        'holes_number' => 'Holes Number',
        'drilling_diameter' => 'Drilling Diameter',
        'load' => 'Load',
        'spacing' => 'Spacing',
        'average_depth' => 'Average Depth per Row',
        'collar_height' => 'Collar Height',
        'dead_ground_height' => 'Dead Ground Height',
        'fluff_nature' => 'Fluff Nature',
        'closest_structures_distance' => 'Distance from the Closest Structures to the Fire Area',
        'building' => 'Building',
        'bridge' => 'Bridge',
        'road' => 'Road',
        'electric_line' => 'Electric Line',
        'underground_structure' => 'Underground Structure',
        'explosives' => 'Explosives',
        'explosive_qty' => 'Qty of Explosives Used',
        'nbr_detonators' => 'NBR Detonators',
        'pumped_emulsion' => 'Pumped Emulsion Quantity',
        'roc_vol_m3' => 'ROC Volume (m3)',
        'roc_vol_m2' => 'ROC Volume (m2)',
        'tonnage' => 'Tonnage',
        'loading_factor' => 'Loading Factor',
        'seismograph' => 'Seismograph',
        'seismo_number' => 'Séismo No.',
        'event_number' => 'Event No.',
        'location' => 'Location',
        'distance' => 'Dist.',
        'mm_per_sec' => 'Mm / Sec',
        'db' => 'DB',
        'shotgag' => 'Shotgag',
        'shotgag_number' => 'NBR Shotgag used',
        'comment' => 'Comment',
        'image' => 'Image',
        'images' => 'Images',
        'no_images' => 'No Images',
        'snow' => 'Snow',
        'sunny' => 'Sunny',
        'cloudy' => 'Cloudy',
        'rain' => 'Rain',
        'materials' => 'Materials',
        'no_materials_used' => 'No Materials Used',
    ],

    /******* Driller Form *******/
    'driller' => [
        'title' => 'Driller',
        'information' => 'Information',
        'drilling_category' => 'Drilling Category',
        'drill' => 'Drill',
        'location' => 'Location',
        'shoot_number' => 'Shoot Number',
        'drilling_time' => 'Drilling Time',
        'broken_steel' => 'Broken Steel',
        'mechanical_time' => 'Mechanical Time',
        'comments' => 'Comments',
        'dimensions' => 'Dimensions',
        'total_foot' => 'Total Foot',
        'number_holes' => 'Number of Holes',
        'spacing' => 'Spacing',
        'average_depth' => 'Average Depth',
        'burden' => 'Burden',
        'drill_diameter' => 'Drill Diameter',
        'matrix' => 'Matrix',
        'borer' => 'Borer',
    ],

];