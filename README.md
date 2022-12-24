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
        <ul>Fields <code>DB_NAME</code>, <code>USER</code>, <code>PASSWORD</code> ARE REQUIRED.</ul>
        <ul>Field <code>HOST</code> is <code>localhost</code>.</ul>
        <ul>Field <code>Driver</code> is <code>pdo_mysql</code>.</ul><br>
    </ol>
<li>You need to run the website from Crypto-API folder by typing in terminal:<br><code>php -S localhost:8000</code></li>
</ol>

### This is home page where you can look up specific crypto:
![MainClickOnCrypto](https://user-images.githubusercontent.com/38011256/209435892-2d726f9c-59bb-4266-947b-e642761864fb.gif)


### Log in page where you can log in and see your portfolio:
![LoginDashBoard](https://user-images.githubusercontent.com/38011256/209435910-bf61ff74-fc57-4d62-94ec-c22323fe60ce.gif)


### Search bar where you can find specific crypto:
![SearchCrypto](https://user-images.githubusercontent.com/38011256/209435926-f8f23cfb-82b2-4e61-8472-6ff3221e0859.gif)


### Deposit or Withdraw funds:
![AddFundsWithdrawFunds](https://user-images.githubusercontent.com/38011256/209435947-7fe5e4bd-9660-4b3b-947a-9a8879b2fc46.gif)


### Selling Crypto to the market:
![SellCrypto](https://user-images.githubusercontent.com/38011256/209435954-e7bc6048-0cfd-4a7d-b97e-f99acc87f370.gif)


### Transfer Crypto to your friend:
![SendCrypto](https://user-images.githubusercontent.com/38011256/209435964-ce5a2426-0f59-4e6e-a931-3eb7de52115e.gif)
