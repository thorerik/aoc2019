use std::vec::Vec;

fn parse_line(left: &mut Vec<i32>, right: &mut Vec<i32>, input: &str) {
    for line in input.lines() {
        let mut parts = line.split("   ");
        let leftdigit = parts.next().unwrap().parse::<i32>().unwrap();
        let rightdigit = parts.next().unwrap().parse::<i32>().unwrap();
        left.push(leftdigit);
        right.push(rightdigit);
    }
}

fn task_1(input: &str) -> u32 {
    let mut sum = 0;
    let mut left: Vec<i32> = Vec::new();
    let mut right: Vec<i32> = Vec::new();
    parse_line(&mut left, &mut right, input);
    left.sort();
    right.sort();
    for i in 0..left.len() {
        sum += left[i].abs_diff(right[i]);
    }
    sum
}

fn task_2(input: &str) -> u32 {
    let mut left: Vec<i32> = Vec::new();
    let mut right: Vec<i32> = Vec::new();
    parse_line(&mut left, &mut right, input);
    let mut sum = 0;
    for i in 0..left.len() {
        let l = left[i];
        let mut t = 0;
        for i in 0..right.len() {
            if l == right[i] {
                t += 1;
            }
        }
        sum += l * t;
    }
    sum.try_into().unwrap()
}

pub fn solve() -> (u32, u32) {
    let input = include_str!("../data/1");
    (task_1(input), task_2(input))
}


#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_task_1() {
        let input = "3   4
4   3
2   5
1   3
3   9
3   3";
        assert_eq!(task_1(input), 11);
    }

    #[test]
    fn test_task_2() {
        let input = "3   4
4   3
2   5
1   3
3   9
3   3";
        assert_eq!(task_2(input), 31);
    }
}