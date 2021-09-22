## KATA SKELETON DANIELESAULSCILLIA - PHP VERSION

## KATA RNA TRANSCRIPTION

Given a DNA strand, return its RNA complement (per RNA transcription).

Both DNA and RNA strands are a sequence of nucleotides.

The four nucleotides found in DNA are adenine (A), cytosine (C), guanine (G) and thymine (T).

The four nucleotides found in RNA are adenine (A), cytosine (C), guanine (G) and uracil (U).

Given a DNA strand, its transcribed RNA strand is formed by replacing each nucleotide with its complement:

G -> C
C -> G
T -> A
A -> U
__

## Test list

Run tests: `vendor/phpunit/phpunit/phpunit tests`

- [x] 'G' -> 'C'
- [x] 'C' -> 'G'
- [x] 'T' -> 'A'
- [x] 'A' -> 'U'
- [ ] **'GCTA' -> 'CGAU'**