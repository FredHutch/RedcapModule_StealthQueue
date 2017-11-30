# RedcapModule_StealthQueue
This REDCap module sends REDCap's survey queue under cover. When employed, survey queue will function normally but will work silently and invisibly. And the REDCap user will not know it is there.

## Author 
Paul Litwin, Fred Hutchinson Cancer Research Center

## Notes
1. You must enable auto-start on all surveys in order for this module to work correctly.
2. Do not enable this module where you wish for users to be aware of survey queue or where you need for them to start surveys at their option.

## How it Works
Stealth Queue works by injecting some JavaScript into a couple of pages that hides:
1. the survey queue heading (normally displayed in the top right corner of each page of a survey in the queue) via the *redcap_survey_page* hook, and
2. the surey queue table (normally displayed at the bottom of the survey queue completion page) via the *redcap_survey_complete* hook.

### Before Stealth Queue
Notice the survey queue widget that appears at the top right of each survey page:

![top right of each survey page before Stealth Queue](https://github.com/FredHutch/RedcapModule_StealthQueue/blob/master/docs/sq1.PNG "top right of each survey page before Stealth Queue")

And the survey queue table appears when the surveys are done:

![end of survey queue before Stealth Queue](https://github.com/FredHutch/RedcapModule_StealthQueue/blob/master/docs/sq2.PNG "survey queue table before Stealth Queue")
### After Stealth Queue
No more little survey queue widget at the top of each survey page:

![top right of each survey page after Stealth Queue](https://github.com/FredHutch/RedcapModule_StealthQueue/blob/master/docs/stq1.PNG "top right of each survey page after Stealth Queue")

And no more table at the end of the queue:

![end of survey queue after Stealth Queue](https://github.com/FredHutch/RedcapModule_StealthQueue/blob/master/docs/stq2.PNG "survey queue table after Stealth Queue")


## Version History
v1.0 -- initial version. 2017 Nov 20.
