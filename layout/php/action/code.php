
tariff_power / tariff_id - Tariff Group
[A] mac / mac_db - Monthly Average Consumption


[B] psc - Solar Capacity
[J] pyl - Year of Lease
[K] pnp - Number of Powervault to install
[E] pbp - Battery Price
[F] pscb - Shipment Cost for Battery %
[C] pspc - Solar Panel Cost
[D] pbs - Battery Size
[G] pmt - Maintenance & Tech Support Fee
[H] psif - System Insurance Fee %
[I] pbsf - Backend Support Fee %


mge - value monthly generation RE
mgg - value tariff after powervault (Monthly Generation Grid (kWH))
vbp = value battery price
vbs = value battery size
vscbs = value shipment cost for battery storage
vsi = value system insurance
vps = value part sparing or helpdesk and backend support
vtsc = value total system cost
vtscy = value total system cost years (include leasing charge)
vld = Leasing Deposit
vl = Leasing

<!-- investment -->
[D] vbs = (pbs * pnp)
[E] vbp = (pbp * pnp) 
[F] vscbs = (vbp * pscb)
[H] vsi = (pspc + vbp) * psif
[I] vps = (pspc + vbp) * pbsf

((C+E+F)+((G+H+I) x J))
[FCB1BL] vtsc = ((pspc + vbp +vscbs) +(( pmt + vsi + vps) * pyl))

<!-- saving -->
((FCB1BL*0.03) x J) + FCB1BL
[FCB1] vtscy = ((vtsc * 0.03) * pyl ) + vtsc

[FCB2Depo] vld = vtscy * 0.1
[FCB2] vl = (vtscy - vld) / (pyl - 1)

<!-- [D] n_pbs = (pbs * pnp)
[E] n_pbp = (pbp * pnp)
[F] n_pscb = n_pbp * pscb
[H] n_psif = (pspc + pbp) * psif
[I] n_pbsf = (pspc + pbp) * pbsf -->
