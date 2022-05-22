# Extraordinary Substring

Code for 
resolve a problem.

## Specification
*Input:* **string**
*Output:* **integer**
###Mapping
Mapping integer with character:
- 1 => "ab"
- 2 => "cde"
- 3 => "fgh"
- 4 => "ijk"
- 5 => "lmn"
- 6 => "opq"
- 7 => "rst"
- 8 => "uvw"
- 9 => "xyz"
### Logic
For every substring of input string check if the sum of all characters are divisible for the length of the substring.
Sum the total of the substrings that respect the previous point.

#### Example
*Input string:* **asdf**
##### Substrings

|Substring|Mapping|Sum|Length|Divisible|
|---|---|---|---|---|---|
|a|1|1|1|**Yes**
|as|1,7|8|2|**Yes**
|asd|1,7,2|10|3|No
|asdf|1,7,2,3|13|4|No
|s|7|7|1|**Yes**
|sd|7,2|9|2|No
|sdf|7,2,3|12|3|**Yes**
|d|2|2|1|**Yes**
|df|2,3|5|2|No
|f|3|3|1|**Yes**

*Output:* **6**






 
