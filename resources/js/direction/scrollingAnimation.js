
const animatedScrollObserver = new IntersectionObserver(
    (entries,animatedScrollObserver)=>{
            entries.forEach((entry) => {
                if(entry.isIntersecting){
                    entry.target.classlist.add('enter');
                    animatedScrollObserver.unobserver(entry.target);
                }
            });
        
    }
);

export default{
    blind(el){
        el.classlist.add('before-enter');
        animatedScrollObserver.observe(el);
    }
}