Apps
=========

> WARNING: Apps are intended for experimenting and learning, NOT for a production environment.

![Image of Yobi](http://www.primechain.in/img/github_yobiapps.png)

Apps are a suite of apps built in php that can be readily deployed on [Multichain](https://github.com/MultiChain). The


System Requirements
-------------------

An instance of [ChainzZz](https://github.com/unibitlabs/chainzZz)

Installation
------------

Apps are automatically installed during the [ChainzZz](https://github.com/Primechain/yobichain) setup.

Creating an account
---------------------
* Visit `http://<IP Address>/apps/register.php` and enter your name, username and password.
* Your account will be created.
* You will automatially be taken to the sigin page at `http://<IP Address>/apps/login.php`
* Enter your username and password to login.


Vault
------------

1. Vault is a simple blockchain powered document storage and retrieval system.

2. To access Vault visit `http://<IP Address>/apps/vault_upload.php`

3. Select a file to upload, add a description and click upload.

4. If all goes well, you should see a success mesage and the transaction id.

5. Clicking on the transaction id will take you to the Transaction Details page which shows:

  + the Transaction Id - can be clicked to view details
  + Uploader  - can be clicked to view details
  + Block Hash - can be clicked to view details
  + Confirmations
  + Date of Upload
  + Description
  + Download Link

6. To view / search uploads, visit `http://<IP Address>/apps/vault_download.php`

Contracts
------------

1. Contracts is a simple blockchain powered system for digitally signng contracts.

2. To upload a contract, visit `http://<IP Address>/apps/contract_upload.php`

3. To invite signees, visit `http://<IP Address>/apps/contract_invite.php`

4. To view contracts, visit `http://<IP Address>/apps/contracts_history.php`

5. To sign a contract for which you hve been invited, visit `http://<IP Address>/apps/contract_sign.php`

6. To view details of a particular contract, visit `http://<IP Address>/apps/contract_view_details.php`


WebWallet
------------

1. WebWallet is a simple blockchain powered wallet for Yourcoins, a smart asset.

2. To send Yourcoins, visit `http://<IP Address>/apps/ic_send_money.php`

3. To view your transactions, visit `http://<IP Address>/apps/ic_view_history.php`

Live demo
---------
Links to the live demo can be found here - [https://github.com/Primechain/yobichain](https://github.com/Primechain/yobichain).

Planned roadmap
-----
- [ ] Secure messaging server


Contributors
-------------
* Sripathi Srinivasan (sripathi@primechain.in) [Project Lead]
* Rohas Nagpal (rohas@primechain.in)
* Sudin Baraokar (HEAD.SBICIC@sbi.co.in)
* Shinam Arora (shinam@primechain.in)
