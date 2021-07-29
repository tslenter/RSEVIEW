## 1. rseview
Remote Syslog viewer for elasticsearch. Default the rsview command access the plaintext files. By using this app direct access is given to the elasticsearch engine for CLI output. Extracts data from the default Remote Syslog index.

## 3. Usage

### 3.1 Installation:
```
chmod +x rseinstaller
./rseinstaller
```

### 3.2 Removal:
```
chmod +x rseremover
./rseremover
```

### 3.3 Usage:
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

### 3.4 Example output:
```
##################################################
#Remote Syslog Elasticsearch Viewer              #
#More information: https://www.remotesyslog.com  #
#Remote Syslog viewer for Elasticsearch          #
#Version: BETA 0.1 for RSX 0.1                   #
#Donations: https://github.com/tslenter/rseview  #
##################################################

3c08.f611.ac00: *Jul 29 09:47:53.091: %WIDS-4-SIG_ALARM: Attack is detected on Sig:Standard Id:2 Channel:1 Source MAC:0432.f417.8d87
c89c.1da8.0010: *Jul 29 09:47:54.753: %WIDS-4-SIG_ALARM: Attack is detected on Sig:Standard Id:2 Channel:1 Source MAC:0432.f417.8d87
c89c.1da8.0322: *Jul 29 09:47:53.802: %WIDS-4-SIG_ALARM: Attack is detected on Sig:Standard Id:2 Channel:1 Source MAC:0432.f417.8d87
```

## 4. Donation and help

### 4.1 Donation

Crypto:

```
XRP/Ripple: rHdkpJr3qYqBYY3y3S9ZMr4cFGpgP1eM6B
BTC/Bitcoin: 1JVmexqGBQyGv9fVkSynHapi2U6ZCyjTUJ
LTC/Litecoin Segwit: MAH8ATCK6X7biiTQrW7jUZ6L9eg1YBo5qS
ETH/Ethereum: 0xd617391076F9bEa628f657606DEAB7a189199AF5
```
PayPal:

[![paypal](https://www.paypalobjects.com/en_US/NL/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=KQKRPDQYHYR7W&currency_code=EUR&source=url)

### 4.2 Help

To improve the code and functions we like to have you help. Send your idea or code to: info@remotesyslog.com or create a pull request. We will review it and add it to this project.

### 4.3 Funds
All donations and other funds will be used to cover cost of this project and to improve tests/plugins/core scripts. The roadmap will display new functions or products. Check https://www.remotesyslog.com for more information.

## 5. License

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
