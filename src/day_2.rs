fn task_1(input: &str) -> u32 {
    let lines = input.lines();
    let mut num_safe = 0;
    for line in lines {
        let mut parts = line.split(" ").map(|x| x.parse::<i32>());
        // identify if the numbers in parts is in ascending or descending order
        // if they are in ascending or descending order, add 1 to the num_safe otherwise add 0
        let mut prev = parts.next().unwrap().unwrap(); // grab the first number
        let mut is_descending = false;
        let mut is_ascending = false;
        let mut safe = true;

        for part in parts {
            match part {
                Ok(x) => {
                    if x < prev {
                        is_descending = true;
                    }
                    if x > prev {
                        is_ascending = true;
                    }
                    if prev == x {
                        safe = false;
                        break;
                    }
                    if is_descending && is_ascending {
                        safe = false;
                        break;
                    }
                    if x.abs_diff(prev) > 3 {
                        safe = false;
                        break;
                    }
                    prev = x;
                }
                Err(_) => {
                    panic!("error");
                }
            }
        }
        num_safe += if safe { 1 } else { 0 };
    };

    num_safe.try_into().unwrap()
}


fn task_2(input: &str) -> u32 {
    42
}

pub fn solve() -> (u32, u32) {
    let input = include_str!("../data/2");
    (task_1(input), task_2(input))
}


#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_task_1() {
        let input = "7 6 4 2 1
1 2 7 8 9
9 7 6 2 1
1 3 2 4 5
8 6 4 4 1
1 3 6 7 9";
        assert_eq!(task_1(input), 2);
    }

    #[test]
    fn test_task_2() {
        let input = "7 6 4 2 1
1 2 7 8 9
9 7 6 2 1
1 3 2 4 5
8 6 4 4 1
1 3 6 7 9";
        assert_eq!(task_2(input), 4);
    }
}