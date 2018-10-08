# Security
:wrench: Security generator component

![Packagist](https://img.shields.io/packagist/dt/nepttune/security.svg)
![Packagist](https://img.shields.io/packagist/v/nepttune/security.svg)
[![CommitsSinceTag](https://img.shields.io/github/commits-since/nepttune/robots/v1.0.svg?maxAge=600)]()

[![Code Climate](https://codeclimate.com/github/nepttune/security/badges/gpa.svg)](https://codeclimate.com/github/nepttune/security)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nepttune/security/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nepttune/security/?branch=master)

## Introduction

This component automaticaly generates security.txt from parameters in configuration.

## Dependencies

- [nepttune/base-requirements](https://github.com/nepttune/base-requirements)
- [nepttune/base-component](https://github.com/nepttune/base-component)

## How to use

- Register `\Nepttune\Component\ISecurityFactory` as service in cofiguration file, inject it into presenter, write `createComponent` method and use macro `{control}` in template file.
  - Just as any other component.
  - You need to pass security configuration to factory service.
  - Content type is automaticaly set to `text/plain`.
- Modify parameters to accomplish your needs.

### Example configuration

```
services:
    securityFactory:
        implement: Nepttune\Component\ISecurityFactory
        arguments:
          - '%security%'
parameters:
    security:
        contact: 'contact@test.com'
        hiring: 'https://hiring.test.com'
        acknowledgements: 'https://hall-of-fame.test.com'
        permission: 'none'
```

### Example presenter

```
class ExamplePresenter implements IPresenter
{
    /** @var  \Nepttune\Component\ISecurityFactory */
    protected $iSecurityFactory;
    
    public function __construct(\Nepttune\Component\ISecurityFactory $ISecurityFactory)
    {
        $this->iSecurityFactory = $ISecurityFactory;
    }

    protected function createComponentSecurity() : \Nepttune\Component\Security
    {
        return $this->iSecurityFactory->create();
    }
}
```
