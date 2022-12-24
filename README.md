# Crypto-API

## In this Crypto website you can:

* Find your favorite crypto.
* Buy and Sell crypto.
* Open and Close Short positions on your crypto.
* Transfer your crypto to another user.
* Receive crypto from another user.
## Instructions to run the website:
<ol>
<li>Clone this repository using the command:<br><code>git clone https://github.com/RihardsTirums/Crypto-API.git</code></li><br>
<li>Install the required packages using the command:<br><code>composer install</code></li><br>
<li>Make a copy of the <code>.env.example</code> and rename it to <code>.env</code>.</li><br>
<li>Register at https://coinmarketcap.com/api/ and get your API key. </li><br>
<li>Enter your API key in the <code>.env</code> file.</li><br>
<li>I added a <code>schema.sql</code> file in the repository you need to import the table structure into the project.</li><br>
<li>Enter your database credentials in the <code>.env</code> file: </li>
    <ol>
        <ul>Fields <code>DB_NAME</code>, <code>USER</code>, <code>PASSWORD</code> **ARE REQUIRED**.</ul>
        <ul>Field <code>HOST</code> is <code>localhost</code>.</ul>
        <ul>Field <code>Driver</code> is <code>pdo_mysql</code>.</ul><br>
    </ol>
<li>You need to run the website from Crypto-API folder by typing in terminal:<br><code>php -S localhost:8000</code></li>
</ol>

### This is home page where you can look up specific crypto:
![MainClickOnCrypto.gif](..%2F..%2FVideos%2FMainClickOnCrypto.gif)

### Log in page where you can log in and see your portfolio:
![LoginDashBoard.gif](..%2F..%2FVideos%2FLoginDashBoard.gif)

### Search bar where you can find specific crypto:
![SearchCrypto.gif](..%2F..%2FVideos%2FSearchCrypto.gif)

### Deposit or Withdraw funds:
![AddFundsWithdrawFunds.gif](..%2F..%2FVideos%2FAddFundsWithdrawFunds.gif)

### Selling Crypto to the market:
![SellCrypto.gif](..%2F..%2FVideos%2FSellCrypto.gif)

### Transfer Crypto to your friend:
![SendCrypto.gif](..%2F..%2FVideos%2FSendCrypto.gif)