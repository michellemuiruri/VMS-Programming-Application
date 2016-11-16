# Valid Emails

E-mail validation is a widely known problem with several widely known solutions. However, you are working on an advanced spam-detection feature and you don't just need to check that some e-mail is correct, you need to count the number of correct e-mails that can be obtained using the given pattern.

Assume that a correct e-mail is a string satisfying the following conditions:

- the string has exactly one character `'@'` in it;
- the string before `'@'` consists of one or more non-empty groups of lowercase letters from `'a'` to `'e'` inclusive, separated by `'.'`;
- the string after `'@'` consists of two or more non-empty groups of lowercase letters from `'a'` to `'e'` inclusive, separated by `'.'`.

For example,

- `"a@b.e"`
- `"abcde.edcba@a.b.c.d.e"`

are correct e-mails, while those listed below are not:

- `"@a.a"` (no non-empty groups of lowercase letters before `'@'`)
- `"a@a"` (only one non-empty group of lowercase letters after `'@'`)
- `"a.b@c.d@e.e"` (more than one `'@'` character)
- `"aa..aa@a.a"` (no lowercase letters between two consecutive `'.'`s)
- `"abc@d.e.f"` (`'f'` does not belong to the range [`'a'`..`'e'`])
- `"abc.@a.a"` (no letters between `'.'` and `'@'`)
- `"abc@a.a."` (no letters after the last `'.'`)

Example

For `pattern = "abcd@?bcd.ca"`, the output should be
`correctEmails(pattern) = 5`.

The correct e-mails that may be obtained from this pattern are:

- `"abcd@abcd.ca"`
- `"abcd@bbcd.ca"`
- `"abcd@cbcd.ca"`
- `"abcd@dbcd.ca"`
- `"abcd@ebcd.ca"`

Your function should accept a single string containing the test pattern:

```php
function correctEmails($pattern) {

}
```

Sample results for testing your code:

| Pattern | Expected Result |
|---------|----------------:|
| `abcd@?bcd.ca` | 5 |
| `a??@???.af` | 0 |
| `??????????` | 11,562,500 |
| `a?c@b?c` | 6 |
| `a????.?` | 2,125 |
| `a?c@b?c.?` | 180 |
