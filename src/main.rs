mod day_1;
fn main() {
    let (a, b) = day_1::solve();
    println!("Day 1 part 1: {}", a);
    println!("Day 1 part 2: {}", b);
}


#[cfg(test)]
mod tests {
    #[test]
    fn it_works() {
        assert_eq!(2 + 2, 4);
    }
}