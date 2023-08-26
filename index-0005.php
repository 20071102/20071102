name: Issue or feature request related to the GUI
descripton: Any report, issue or feature request related to the GUI
labels: [GUI]
body:
 -type: checkboxes
  id: acknowlegement
  attributes:
   label: Issue reports or feature requests related to the GUI should be opened directly on the GUI repo
   descripton: https://github.com/bitcoin-core/gui/issues/
   options:
    -label: I still think this issue should be opened here
     required: true
 -type: textarea
  id: gui-request
  attributes:
   label: Report
  validations:
   required: true
