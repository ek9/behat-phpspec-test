behatspec-test
==============

Simple test repository to test BehatSpec functionality.

- `master` branch is using `dev-master` version of BehatSpec.
- `v0.5` branch is using `^0.5` version of BehatSpec.

It contains a basic configuration of Behat3 and PhpSpec3 with BehatSpec enabled
and has an example `features/product.feature` defined to test if behat and
phpspec integration works correctly.

## Setup

Install dependencies via coposer:

    $ composer install

## Usage

Run tests via `behat`:

    $ bin/behat

The above command should offer you to generate PhpSpec specification for
Product class and then generate it by running `phpspec`.
