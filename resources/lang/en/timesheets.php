<?php

return [

	/******* Main template *******/
    'title' => 'Time Sheets',
    'start_date' => 'Start Date',
    'end_date' => 'End Date',
    'list' => 'Time Sheets List',
    'show' => 'Show',
    'time_sheets_list' => 'Time Sheets List',
    'date' => 'Date',
    'view' => 'View',
    'image' => 'Image(s)',
    'code_gain_text' => 'Please enter the Code de gain for regular time and overtime.',
    'employee' => 'Employee',
    'employees' => 'Employees',
    'teams' => 'Teams',
    'projects' => 'Projects',
    'all' => 'All',
    'view_html' => 'View HTML',
    'generate_csv' => 'Generate XLS',
    'print' => 'Print',
    'accounting' => 'Accounting',
    'timesheet_report' => 'Timesheet Report',
    'download_pdf' => 'Download PDF',
    'empty_results' => 'There are no timesheets for this time period.',

    /******* Controller *******/
    'title' => 'Time Sheets',

    /******* Accounting *******/
    'generate_avantage' => 'Generate Avantage Pay File',
    'avantage_text_1' => 'This will generate a .txt file that you can import in your Avantage software.<br/>
                The format of this query is <b>TimeZone</b> (only compatible with <u>Implication</u> and <u>Intégration</u> versions).<br/>
                <b>Before generating the file</b>, please make sure that every projects and employees have their Avantage\'s Number setted (you can set this by editing a project or an employee).<br/><br/>
                To import the file in Avantage, go to <u>Opérateur</u> >> <u>Échange de données</u> >> <u>Importation</u> >> <u>TimeZone</u><br/><br/>',
    'code_de_gain' => 'Code de Gain',
    'avantage_text_2' => 'When importing a file in Avantage, you will have the option to create a <u>Code de Gain</u>.<br/>
                    You need to create one for regular time and one for overtime. Once created, please enter them here:',
    'code_de_gain_rt' => 'Code de gain for Regular Time',
    'code_de_gain_ot' => 'Code de gain for Overtime',
    'generate_with' => 'Generate With',
    'tasks' => 'Tasks',
    'generate_file' => 'Generate File',
    'warning_avantage_1' => '<b>Warning</b>: Some projects, tasks or employees does not have an Avantage number.',
    'warning_avantage_2' => '<br/><br/>The following <u>project(s)</u> does not have an Avantage Project\'s Number. Click on the link to set their Avantage ID.<br/>',
    'warning_avantage_3' => '<br/><br/>The following <u>task(s)</u> does not have an Avantage Task\'s Number. Click on the link to set their Avantage ID.<br/>',
    'warning_avantage_4' => '<br/><br/>The following <u>employee(s)</u> does not have an Avantage Employee\'s Number. Click on the link to set their Avantage ID.<br/>',
    'warning_avantage_5' => 'Once every Avantage\'s numbers are entered, click on the link below to generate the file again.',
    'warning_avantage_6' => 'You can force generate the file if you want, but projects without a number will be left blank, and employees without a number won\'t be generated.<br/>',
    'refresh' => 'Refresh',
    'generate_file_anyway' => 'Generate file anyway',

    /******* Print *******/
    'timesheet' => 'Time Sheet',
    'to' => 'to',
    'project' => 'Project',
    'signature' => 'Signature',
    'total_time' => 'Total Time',
    'total' => 'Total',
    'grand_total' => 'Grand Total',

];
