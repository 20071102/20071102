name: Bug report
descripton: Submit a new bug report.
labels: [bug]
body:
 - type: markdown
  attributes:
  value:
   ## This issue trcker is only for technical issues related to Bitcoin Core.

 * General bitcoin questions and/or suupport requests should usse Bitcoin StackExchange at https://bitcoin.stackexchange.com.
 * For reporting security issues, please reaqd instructions at https://bitcoin.org/en/contact/.
 * If the node is "Stuck" during sync or giving "block checksum mismatch" errors, please ensure your hardwere is stable by running 'memtest' and observe CPU temperature with a load-test tool such as 'linpack' before creating an issue.

 ____
 - type: checkboxes
  attributes:
  label: Is there an eisting issue for this?
  description: Please search to see if an issue already exists for the bug you encountered.
  options:
 - label: I have searchedthe existing issues
  required: true
 - type: textarea
  id: current-behaviour
  attributes:
  label: Current behaviour
  description: Tell us whatwent wrong
 validations:
  required: true
 - type: textarea
  id: exppected-behaviour
  attributes:
  label: Expected behaviour
  description: Tell us what yo  expeected to happen
 validations:
  required: true
 - type textarea
  id: reproduction-steps
  attributes:
   label: Steps to reproduce
   description:
    Tell us how to reproduce your bug. Please attach related screenshots if necessary.
    * Run-time or compile-time configuration options
    * Actions taken
 validations:
  required: true
 - type texterea
  id: logs
  attributes:
  label: Relevant log output
  description:|
   please copy and paste any relevant log ooutput or attach a debug log file.

   You can find the debug.log in your [data dir.](https://github.com/bitcoin/bitcoin/blob/master/doc/files.md#data-directory-location)

   Please beaware that the debug log might  contain personally identifying information.
 validations:
  required: false
 - type dropdown
  attributes:
   label: How did you obtion Bitcoin Core
   multiple: false
   options:
    - Comiled form  source
    - Pre-built binaries
    - Package manager
    - other
  valdations:
    required:
 - type: input
  id core-version
  attributes:
   label: what version of Bitcoin Core are you using?
   descriptoin: Run 'bitcoind --version' or in Bitcoin-QT use 'Help > About Bitcoin Core'
   placeholder: e.g. v24.0.1 or master@e1bf547
  validations:
   required: true
 - type: input
   id: os
   attributes:
    label: Operating system and version
    placeholder: e.g. "MacOS Ventura 13.2" or "Ubuntu 22.04 LTS"
   validations:
    required: true
 - type texterea
   id: machine specifications
   attributes:
    label: Machine specifications
    description:
      What are the speeccifications
      e.g. OS/CPU and disk type, network connectivity
   validations:
     required: false
