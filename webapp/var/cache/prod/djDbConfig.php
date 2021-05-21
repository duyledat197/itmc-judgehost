<?php

return array (
  'verification_required' => 
  array (
    'name' => 'verification_required',
    'type' => 'bool',
    'default_value' => false,
    'public' => false,
    'description' => 'Is verification of judgings by jury required before publication?',
    'category' => 'Scoring',
  ),
  'compile_penalty' => 
  array (
    'name' => 'compile_penalty',
    'type' => 'bool',
    'default_value' => false,
    'public' => true,
    'description' => 'Should submissions with compiler-error incur penalty time (and show on the scoreboard)?',
    'category' => 'Scoring',
  ),
  'penalty_time' => 
  array (
    'name' => 'penalty_time',
    'type' => 'int',
    'default_value' => 20,
    'public' => true,
    'description' => 'Penalty time in minutes per wrong submission (if finally solved).',
    'category' => 'Scoring',
  ),
  'results_prio' => 
  array (
    'name' => 'results_prio',
    'type' => 'array_keyval',
    'default_value' => 
    array (
      'memory-limit' => 99,
      'output-limit' => 99,
      'run-error' => 99,
      'timelimit' => 99,
      'wrong-answer' => 99,
      'no-output' => 99,
      'correct' => 1,
    ),
    'public' => false,
    'description' => 'Priorities of results for determining final result with multiple testcases. Higher priority is used first as final result. With equal priority, the first occurring result determines the final result.',
    'category' => 'Scoring',
  ),
  'results_remap' => 
  array (
    'name' => 'results_remap',
    'type' => 'array_keyval',
    'default_value' => 
    array (
    ),
    'public' => false,
    'description' => 'Remap testcase result, e.g. to disable a specific result type such as \'no-output\'.',
    'category' => 'Scoring',
  ),
  'score_in_seconds' => 
  array (
    'name' => 'score_in_seconds',
    'type' => 'bool',
    'default_value' => false,
    'public' => true,
    'description' => 'Should the scoreboard resolution be measured in seconds instead of minutes?',
    'category' => 'Scoring',
  ),
  'memory_limit' => 
  array (
    'name' => 'memory_limit',
    'type' => 'int',
    'default_value' => 2097152,
    'public' => false,
    'description' => 'Maximum memory usage (in kB) by submissions. This includes the shell which starts the compiled solution and also any interpreter like the Java VM, which takes away approx. 300MB! Can be overridden per problem.',
    'category' => 'Judging',
  ),
  'output_limit' => 
  array (
    'name' => 'output_limit',
    'type' => 'int',
    'default_value' => 8192,
    'public' => false,
    'description' => 'Maximum output (in kB) submissions may generate. Any excessive output is truncated, so this should be greater than the maximum testdata output.',
    'category' => 'Judging',
  ),
  'process_limit' => 
  array (
    'name' => 'process_limit',
    'type' => 'int',
    'default_value' => 64,
    'public' => false,
    'description' => 'Maximum number of processes that the submission is allowed to start (including shell and possibly interpreters).',
    'category' => 'Judging',
  ),
  'sourcesize_limit' => 
  array (
    'name' => 'sourcesize_limit',
    'type' => 'int',
    'default_value' => 256,
    'public' => true,
    'description' => 'Maximum source code size (in kB) of a submission. This setting should be kept in sync with that in "etc/submit-config.h.in".',
    'category' => 'Judging',
  ),
  'sourcefiles_limit' => 
  array (
    'name' => 'sourcefiles_limit',
    'type' => 'int',
    'default_value' => 100,
    'public' => true,
    'description' => 'Maximum number of source files in one submission. Set to one to disable multiple file submissions.',
    'category' => 'Judging',
  ),
  'script_timelimit' => 
  array (
    'name' => 'script_timelimit',
    'type' => 'int',
    'default_value' => 30,
    'public' => false,
    'description' => 'Maximum seconds available for compile/compare scripts. This is a safeguard against malicious code and buggy scripts, so a reasonable but large amount should do.',
    'category' => 'Judging',
  ),
  'script_memory_limit' => 
  array (
    'name' => 'script_memory_limit',
    'type' => 'int',
    'default_value' => 2097152,
    'public' => false,
    'description' => 'Maximum memory usage (in kB) by compile/compare scripts. This is a safeguard against malicious code and buggy script, so a reasonable but large amount should do.',
    'category' => 'Judging',
  ),
  'script_filesize_limit' => 
  array (
    'name' => 'script_filesize_limit',
    'type' => 'int',
    'default_value' => 2621440,
    'public' => false,
    'description' => 'Maximum filesize (in kB) compile/compare scripts may write. Submission will fail with compiler-error when trying to write more, so this should be greater than any *intermediate or final* result written by compilers.',
    'category' => 'Judging',
  ),
  'timelimit_overshoot' => 
  array (
    'name' => 'timelimit_overshoot',
    'type' => 'string',
    'default_value' => '1s|10%',
    'public' => false,
    'description' => 'Time that submissions are kept running beyond timelimit before being killed. Specify as "Xs" for X seconds, "Y%" as percentage, or a combination of both separated by one of "+|&" for the sum, maximum, or minimum of both.',
    'category' => 'Judging',
  ),
  'output_storage_limit' => 
  array (
    'name' => 'output_storage_limit',
    'type' => 'int',
    'default_value' => 50000,
    'public' => false,
    'description' => 'Maximum size of error/system output stored in the database (in bytes); use "-1" to disable any limits.',
    'category' => 'Judging',
  ),
  'output_display_limit' => 
  array (
    'name' => 'output_display_limit',
    'type' => 'int',
    'default_value' => 2000,
    'public' => false,
    'description' => 'Maximum size of run/diff/error/system output shown in the jury interface (in bytes); use "-1" to disable any limits.',
    'category' => 'Judging',
  ),
  'lazy_eval_results' => 
  array (
    'name' => 'lazy_eval_results',
    'type' => 'bool',
    'default_value' => true,
    'public' => false,
    'description' => 'Lazy evaluation of results? If enabled, stops judging as soon as a highest priority result is found, otherwise always all testcases will be judged.',
    'category' => 'Judging',
  ),
  'judgehost_warning' => 
  array (
    'name' => 'judgehost_warning',
    'type' => 'int',
    'default_value' => 30,
    'public' => false,
    'description' => 'Time in seconds after a judgehost last checked in before showing its status as "warning".',
    'category' => 'Judging',
  ),
  'judgehost_critical' => 
  array (
    'name' => 'judgehost_critical',
    'type' => 'int',
    'default_value' => 120,
    'public' => false,
    'description' => 'Time in seconds after a judgehost last checked in before showing its status as "critical".',
    'category' => 'Judging',
  ),
  'diskspace_error' => 
  array (
    'name' => 'diskspace_error',
    'type' => 'int',
    'default_value' => 1048576,
    'public' => false,
    'description' => 'Minimum free disk space (in kB) on judgehosts.',
    'category' => 'Judging',
  ),
  'update_judging_seconds' => 
  array (
    'name' => 'update_judging_seconds',
    'type' => 'int',
    'default_value' => 5,
    'public' => false,
    'description' => 'Post updates to a judging every X seconds. Set to 0 to update after each judging_run.',
    'category' => 'Judging',
  ),
  'default_compare' => 
  array (
    'name' => 'default_compare',
    'type' => 'string',
    'default_value' => 'compare',
    'public' => false,
    'description' => 'The script used to compare outputs if no special compare script specified.',
    'category' => 'Judging',
  ),
  'default_run' => 
  array (
    'name' => 'default_run',
    'type' => 'string',
    'default_value' => 'run',
    'public' => false,
    'description' => 'The script used to run submissions if no special run script specified.',
    'category' => 'Judging',
  ),
  'clar_categories' => 
  array (
    'name' => 'clar_categories',
    'type' => 'array_keyval',
    'default_value' => 
    array (
      'general' => 'General issue',
      'tech' => 'Technical issue',
    ),
    'public' => true,
    'description' => 'List of additional clarification categories.',
    'category' => 'Clarification',
  ),
  'clar_answers' => 
  array (
    'name' => 'clar_answers',
    'type' => 'array_val',
    'default_value' => 
    array (
      0 => 'No comment',
      1 => 'Read the problem statement carefully',
    ),
    'public' => false,
    'description' => 'List of predefined clarification answers.',
    'category' => 'Clarification',
  ),
  'clar_queues' => 
  array (
    'name' => 'clar_queues',
    'type' => 'array_keyval',
    'default_value' => 
    array (
    ),
    'public' => true,
    'description' => 'List of clarification queues.',
    'category' => 'Clarification',
  ),
  'clar_default_problem_queue' => 
  array (
    'name' => 'clar_default_problem_queue',
    'type' => 'string',
    'default_value' => '',
    'public' => true,
    'description' => 'Queue to assign to problem clarifications.',
    'category' => 'Clarification',
  ),
  'show_pending' => 
  array (
    'name' => 'show_pending',
    'type' => 'bool',
    'default_value' => true,
    'public' => true,
    'description' => 'Show pending submissions on the scoreboard?',
    'category' => 'Display',
  ),
  'show_flags' => 
  array (
    'name' => 'show_flags',
    'type' => 'bool',
    'default_value' => true,
    'public' => true,
    'description' => 'Show country flags in the interfaces?',
    'category' => 'Display',
  ),
  'show_affiliations' => 
  array (
    'name' => 'show_affiliations',
    'type' => 'bool',
    'default_value' => true,
    'public' => true,
    'description' => 'Show affiliation names in the interfaces?',
    'category' => 'Display',
  ),
  'show_affiliation_logos' => 
  array (
    'name' => 'show_affiliation_logos',
    'type' => 'bool',
    'default_value' => false,
    'public' => true,
    'description' => 'Show affiliation logos on the scoreboard?',
    'category' => 'Display',
  ),
  'show_teams_submissions' => 
  array (
    'name' => 'show_teams_submissions',
    'type' => 'bool',
    'default_value' => true,
    'public' => true,
    'description' => 'Show problem columns with submission information on the public and team scoreboards?',
    'category' => 'Display',
  ),
  'show_compile' => 
  array (
    'name' => 'show_compile',
    'type' => 'int',
    'default_value' => 2,
    'public' => true,
    'description' => 'Show compile output in team webinterface?',
    'options' => 
    array (
      0 => 'never',
      1 => 'only on compilation error(s)',
      2 => 'always',
    ),
    'category' => 'Display',
  ),
  'show_sample_output' => 
  array (
    'name' => 'show_sample_output',
    'type' => 'bool',
    'default_value' => false,
    'public' => true,
    'description' => 'Should teams be able to view a diff of their and the reference output to sample testcases?',
    'category' => 'Display',
  ),
  'show_balloons_postfreeze' => 
  array (
    'name' => 'show_balloons_postfreeze',
    'type' => 'bool',
    'default_value' => false,
    'public' => true,
    'description' => 'Give out balloon notifications after the scoreboard has been frozen?',
    'category' => 'Display',
  ),
  'show_relative_time' => 
  array (
    'name' => 'show_relative_time',
    'type' => 'bool',
    'default_value' => false,
    'public' => true,
    'description' => 'Print times of contest events relative to contest start (instead of absolute).',
    'category' => 'Display',
  ),
  'time_format' => 
  array (
    'name' => 'time_format',
    'type' => 'string',
    'default_value' => '%H:%M',
    'public' => false,
    'description' => 'The format used to print times. For formatting options see the PHP \'strftime\' function.',
    'category' => 'Display',
  ),
  'thumbnail_size' => 
  array (
    'name' => 'thumbnail_size',
    'type' => 'int',
    'default_value' => 200,
    'public' => false,
    'description' => 'Maximum width/height of a thumbnail for uploaded testcase images.',
    'category' => 'Display',
  ),
  'show_limits_on_team_page' => 
  array (
    'name' => 'show_limits_on_team_page',
    'type' => 'bool',
    'default_value' => true,
    'public' => true,
    'description' => 'Show time and memory limit on the team problems page.',
    'category' => 'Display',
  ),
  'allow_team_submission_download' => 
  array (
    'name' => 'allow_team_submission_download',
    'type' => 'bool',
    'default_value' => false,
    'public' => true,
    'description' => 'Allow teams to download their own submission code.',
    'docdescription' => 'Note that enabling this option means that if someone gets access to the account of a team, they can download
the source code of all submissions from that team. When this option is disabled, getting access to the account
of a team only allows someone to submit as that team, which can then easily be ignored by the jury later.',
    'category' => 'Display',
  ),
  'team_column_width' => 
  array (
    'name' => 'team_column_width',
    'type' => 'int',
    'default_value' => 0,
    'public' => false,
    'description' => 'Maximum width of team column on scoreboard. Leave 0 for no maximum.',
    'category' => 'Display',
  ),
  'print_command' => 
  array (
    'name' => 'print_command',
    'type' => 'string',
    'default_value' => '',
    'public' => true,
    'description' => 'If set, enable teams and jury to send source code to this command. See admin manual for allowed arguments.',
    'docdescription' => 'See :ref:`printing` for more information.',
    'category' => 'Misc',
  ),
  'data_source' => 
  array (
    'name' => 'data_source',
    'type' => 'int',
    'default_value' => 0,
    'public' => false,
    'description' => 'Source of data: used to indicate whether internal or external IDs are exposed in the API. \'configuration data external\' is typically used when loading configuration data from the ICPC CMS, and \'configuration and live data external\' when running DOMjudge as "shadow system".',
    'options' => 
    array (
      0 => 'all local',
      1 => 'configuration data external',
      2 => 'configuration and live data external',
    ),
    'docdescription' => 'See :doc:`the chapter on running DOMjudge as a shadow system<shadow>` for more information.',
    'category' => 'Misc',
  ),
  'external_ccs_submission_url' => 
  array (
    'name' => 'external_ccs_submission_url',
    'type' => 'string',
    'default_value' => '',
    'public' => false,
    'description' => 'URL of a submission detail page on the external CCS. Placeholder [id] will be replaced by submission ID and [contest] by the contest ID. Leave empty to not display links to external CCS.',
    'docdescription' => 'See :doc:`the chapter on running DOMjudge as a shadow system<shadow>` for more information.',
    'category' => 'Misc',
  ),
  'auth_methods' => 
  array (
    'name' => 'auth_methods',
    'type' => 'array_val',
    'default_value' => 
    array (
    ),
    'public' => false,
    'description' => 'List of allowed additional authentication methods.',
    'docdescription' => 'See :ref:`authentication` for more information.',
    'options' => 
    array (
      0 => 'ipaddress',
      1 => 'xheaders',
    ),
    'category' => 'Authentication',
  ),
  'ip_autologin' => 
  array (
    'name' => 'ip_autologin',
    'type' => 'bool',
    'default_value' => false,
    'public' => false,
    'description' => 'Enable to skip the login page when using IP authentication.',
    'category' => 'Authentication',
  ),
);