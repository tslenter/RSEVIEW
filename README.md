## 1. rseview
Remote Syslog viewer for elasticsearch. Default the rsview command access the plaintext files. By using this app direct access is given to the elasticsearch engine for CLI output. Extracts data from the default Remote Syslog index.

## 2. Usage

### 2.1 Installation:
```
chmod +x rseinstaller
./rseinstaller
```

### 2.2 Removal:
```
chmod +x rseremover
./rseremover
```

### 2.3 Usage:
```
Run the rseview command with the following options:
-h,--help                                       Display help
-s,--search <search string> <buffer>            Search through logging
-v,--view <buffer>                              View logging
-l,--live <buffer>                              View live logging
-ls,--livesearch <search string> <buffer>       Search through live logging
-t,--testmessage                                Send a test message
```

Options:
```
<search string> is text what can be found.
<buffer> is lines displayed within the CLI.
```

The default buffer size = 50

### 2.4 Example output:
```
##################################################
#Remote Syslog Elasticsearch Viewer              #
#More information: https://www.remotesyslog.com  #
#Remote Syslog viewer for Elasticsearch          #
#Version: BETA 0.1 for RSX 0.1                   #
#Donations: https://github.com/tslenter/rseview  #
##################################################

Jul 30 14:08:25.107 remotesyslog001.local CET: %C4K_HWPORTMAN-4-BLOCKEDTXQUEUE: Blocked transmit queue HwTxQId2 on Switch Phyport Gi2/10, count=2192543
Jul 30 14:08:25.107 remotesyslog001.local CET: %C4K_HWPORTMAN-4-BLOCKEDTXQUEUE: Blocked transmit queue HwTxQId7 on Switch Phyport Gi2/10, count=2308115
Jul 30 14:08:41.229 remotesyslog002.local CET: %PM-4-ERR_RECOVER: Attempting to recover from psecure-violation err-disable state on Gi7/48
Jul 30 14:08:52.022 remotesyslog001.local CET: %PM-4-ERR_DISABLE: psecure-violation error detected on Gi7/48, putting Gi7/48 in err-disable state
Jul 30 14:08:52.025 remotesyslog003.local CET: %PORT_SECURITY-2-PSECURE_VIOLATION: Security violation occurred, caused by MAC address 0060.9fa4.d39a on port GigabitEthernet7/48.
```

### 2.5 Useful query's:
When a Remote Syslog Elasticsearch only configuration is installed, activate the index pattern with the following command: 
```
curl -X POST "http://localhost:5601/kibana/api/saved_objects/index-pattern/rsx-syslog-ng*" -H 'kbn-xsrf: true' -H 'Content-Type: application/json' -d'
       {
        "attributes": {
        "title": "rsx-syslog-ng*",
        "timeFieldName": "@timestamp"
        }
       }
       '
```

Delete the main index with:
```
curl -XDELETE --header 'Content-Type: application/json' http://localhost:9200/rsx* | jq
```

## 3. Donation and help

### 3.1 Donation

Crypto:

```
XRP/Ripple: rHdkpJr3qYqBYY3y3S9ZMr4cFGpgP1eM6B
BTC/Bitcoin: 1JVmexqGBQyGv9fVkSynHapi2U6ZCyjTUJ
LTC/Litecoin Segwit: MAH8ATCK6X7biiTQrW7jUZ6L9eg1YBo5qS
ETH/Ethereum: 0xd617391076F9bEa628f657606DEAB7a189199AF5
```
PayPal:

[![paypal](https://www.paypalobjects.com/en_US/NL/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=KQKRPDQYHYR7W&currency_code=EUR&source=url)

### 3.2 Help

To improve the code and functions we like to have you help. Send your idea or code to: info@remotesyslog.com or create a pull request. We will review it and add it to this project.

### 3.3 Funds
All donations and other funds will be used to cover cost of this project and to improve tests/plugins/core scripts. The roadmap will display new functions or products. Check https://www.remotesyslog.com for more information.

## 4. License

"rseview" is a free application that can be used to view syslog messages.

Copyright (C) 2021 Tom Slenter

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.

For more information contact the author:

Name author: Tom Slenter

E-mail: info@remotesyslog.com
