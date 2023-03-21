<?php

return [

    'busted_budget' => ':project_name has busted budget',
    'busted_budget_desc' => 'Project has busted budget. <br/>Total budget: <b>$:total_budget</b><br/>Total budget used: <b>$:total_used</b>',
    'almost_busted_budget' => ':project_name almost has busted budget',
    'almost_busted_budget_desc' => 'Project has reached 90% of budget. <br/>Total budget: <b>$:total_budget</b><br/>Total budget used: <b>$:total_used</b>',
    'busted_budget_on_project' => '<b>:supplier_name</b> has busted budget on project :project_name',
    'busted_budget_on_project_desc' => 'Client is busting budget on project <b>:project_name</b><br/>Total budget from PO: <b>$:total_budget</b><br/>Total budget used: <b>$:total_used</b>',
    'almost_busted_budget_on_project' => '<b>:supplier_name</b> is reaching 90% budget on project :project_name',
    'almost_busted_budget_on_project_desc' => 'Client budget is reaching 90% on project <b>:project_name</b><br/>Total budget from PO: <b>$:total_budget</b><br/>Total budget used: <b>$:total_used</b>',
    'busted_time_estimate' => '<b>:project_name</b> has busted time estimation',
    'busted_time_estimate_desc' => 'Project has busted time estimation.<br/>Estimated time: <b>:total_estimate h</b><br/>Total time worked: <b>:total_worked h</b>',
    'almost_busted_time_estimate' => '<b>:project_name</b> has almost busted time estimation',
    'almost_busted_time_estimate_desc' => 'Project has reached 90% of time estimation.<br/>Estimated time: <b>:total_estimate h</b><br/>Total time worked: <b>:total_worked h</b>',
    'unapproved_hours' => '<b>:project_name</b> has unapproved hours',
    'unapproved_hours_desc' => 'Project has hours confirmed but not yet approved, between <b>:start_date</b> and <b>:end_date</b>.<br/>',
    'overtime_employees' => '<b>:supplier_name</b> has overtime employees',
    'overtime_employees_desc' => 'Client has <b>:number</b> employee(s) with more than 13 hours of work: :names',
    'unset_professions' => '<b>:supplier_name</b> has professions with no price',
    'unset_professions_desc' => 'Client has <b>:number</b> profession(s) with no price: :names',

];
