name: Good First Issue
descripton: (Regular devs only) Suggest a new good first issue
labels: [good first issue]
body:
 -type: markdown
  attributes:
   value:
    Please add the label "good first issue" manually before or after opening

    A good first issue is an uncontroversial issue, that has a relatively unique and obvious solution

    Motivate the issue and explain the solution briefly
 -type: textarea
  id: motivation
  attributes:
   label: Motivation
   descripton: Motivate the issue
   validations:
    required: true
 -type: textarea
  id: solution
  attributes:
   label: Possible solution
   descripton: Describe a possible solution
   validation:
    required: false
 -type: textarea
  id: Useful-skills
  attributes:
   label: Useful Skills
   descripton: For example, "'std::thread'", "Qt5 GUI and async GUI design" or "basic understanding of Bitcoin mining and thhe Bitcoin Core RPC interface".
  validations:
   required: false
 -type: textarea
  attributes:
   label: Guidance for new contributors
   descripton: Please leave this to automatically add the footer for new contributors
   value: |
    want to work on this issue?

    For guidance on contributing, please read [CONTRIBUTING.md](https://github.com/20071102/20071102/blob/master/CONTRIBUTING.md) before opening your pull request.
