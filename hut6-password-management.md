# Password Tips 

## Using the password manager

To save time, install the [browser extensions](https://agilebits.com/onepassword/extensions) and use the shortcut ``command ⌘ + \`` to open the password manager any time you need it. 

If your password manager doesn't automatically fill out the form and doesn't list any entries, search your vault before asking someone else. It's possible that 1password doesn't have a matching password when the domain has changed for example (eg when a site in dev is made live, etc...). 

## What to put in the password manager 

Passwords that are not already stored elsewhere (eg in WHMCS) should be saved in the password manager. Don't put domain authentication keys, database passwords, ftp or ssh passwords in the password manager either. Those are already stored elsewhere and there's no need to also store them in the password manager. 

## New passwords

Don't come up with new passwords yourself. Use a different and strong password for every site. Use caps, number and special characters and don't worry about making it too long (you don't have to remember it anyway, that's what password managers are for).

## Saving passwords

If there are multiple vaults, make sure you save passwords to the right vault. 

When saving the password for a site in the password manager, use this format for the description field: 

```domain.com (username)```

If the site doesn't use the default port (eg for WHM, CPanel), add the port or a label as well after the domain name: 

```domain.com:2087 (username)```

or 

```domain.com:whm (username)```

If a password is out of date in the password manager, or if it's already in there but the password manager asks you to save a new entry, make sure you replace or delete the old entry when saving the password. 

## Domain Changes

Please update the password entry in the password manager when a domain name is changed (eg when a site is launched).

## Auto vs. Manual Save

Autosave can be annoying as it's displayed often, and there's a chance you might save passwords that don't belong in the password manager. It's recommended that you disable it and instead save your passwords manually.