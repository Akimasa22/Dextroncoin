What is Dextroncoin?
DextronCoin is a virtual digital currency built on a private Blockchain Technology with a decentralized Wallet which enable users transfer in form of peer-peer without restrictions. DextronCoin is a utility and equity Coin built for the purpose of trading, gaming and solutions to data-base management. DextronCoin can be transferred within seconds to anytime with minimal or zero transaction charge. The total supply of DextronCoin is limited in supply; there will be a total of 30,000,000 DextronCoin in circulation.

For more information, as well as an immediately useable, binary version of the Dextroncoin Core software, see https://dextroncoin.info, or read the original whitepaper.

Testing
Testing and code review is the bottleneck for development; we get more pull requests than we can review and test on short notice. Please be patient and help out by testing other people's pull requests, and remember this is a security-critical project where any mistake might cost people lots of money.

Automated Testing
Developers are strongly encouraged to write unit tests for new code, and to submit new unit tests for old code. Unit tests can be compiled and run (assuming they weren't disabled in configure) with: make check. Further details on running and extending unit tests can be found in /src/test/README.md.

There are also regression and integration tests, written in Python, that are run automatically on the build server. These tests can be run (if the test dependencies are installed) with: test/functional/test_runner.py

The Travis CI system makes sure that every pull request is built for Windows, Linux, and OS X, and that unit/sanity tests are run automatically.

Manual Quality Assurance (QA) Testing
Changes should be tested by somebody other than the developer who wrote the code. This is especially important for large or high-risk changes. It is useful to add a test plan to the pull request description if testing the changes is not straightforward
